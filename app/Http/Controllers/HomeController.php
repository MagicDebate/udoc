<?php

namespace SimpleDoc\Http\Controllers;

use Illuminate\Http\Request;
use SimpleDoc\User;
use SimpleDoc\Doc;
use SimpleDoc\Repositories\DocRepository;
class HomeController extends Controller
{
     protected $docs;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->docs = $docs;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      return view('home', [
          'docs' => $this->docs->forUser($request->user()),
        ]);
    }
}
