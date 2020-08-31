
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Форма Р{{ $type }}</div>
                <div class="panel-body">
                  @php
                  $url = action('DocController@send', ['id' => 'new']);
                  $formname = "";
                  @endphp
                  @include('forms.Form'.$type)

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
