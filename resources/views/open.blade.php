
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Форма Р{{ $doc->type }}</div>
                <div class="panel-body">
                  @php
                  $form = $doc->form;
                    $formname = $doc->docname;
                  $type = $doc->type;
                  $fields = unserialize($form);
                  $url = action('DocController@send', ['id' => $doc->id]);

                  @endphp
                  @include('forms.Form'.$doc->type)

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
var data =@php echo json_encode($fields); @endphp;
</script>
<script src="{{ asset('js/forms/openform.js') }}"></script>
<script src="{{ asset('js/forms/form'.$type.'.js') }}"></script>
@endsection
