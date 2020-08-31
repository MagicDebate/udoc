<?php

namespace SimpleDoc\Http\Controllers;
use SimpleDoc\Doc;
use SimpleDoc\Repositories\DocRepository;
use Illuminate\Http\Request;

class DocController extends Controller
{
    //
     protected $docs;
    public function __construct(DocRepository $docs)
{
  $this->middleware('auth');
  $this->docs = $docs;
}

public function index(Request $request)
{
  return view('home', [
      'docs' => $this->docs->forUser($request->user()),
    ]);
}

public function open(Request $request, $docId)
{
  $doc = Doc::find($docId);
   return view('open',['doc' => $doc]);
}

public function store(Request $request)
{

   return view('newdoc',['type' => $request->type]);
}


public function destroy(Request $request, $docId)
{
   $doc = Doc::find($docId);
   $this->authorize('destroy', $doc);
   $doc->delete();
   return redirect('/home');
}

public function send(Request $request, $docId)
{
  if($docId <> 'new'){
   $doc = Doc::find($docId);
   $this->authorize('save', $doc);
 }

    else {
      $doc=$request->user()->docs()->create([
        'type' => $request->type,
        ]);

     }

     $fields =$request->all();
     unset($fields['_token']);
     unset($fields['action']);
     $input =serialize( $fields);
     $postdata = $fields;
   switch ($request->action) {

     case 'save':
        $doc->docname = $request->docname;
      /*  $input =base64_encode(serialize($request->all()));*/


        $doc->form=$input;
        $doc->save();
       break;

       case 'print':
       if( $curl = curl_init() ) {
         $uri = 'http://daniliuy.beget.tech/designpatterns/excel';
curl_setopt($curl, CURLOPT_URL,  $uri);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
$out = curl_exec($curl);
curl_close($curl);
return view('complete',['out' => $out, 'in' => $postdata]);
} else {return redirect('/home');}
         break;
   }


   return redirect('/open/'.$doc->id);
}

}
