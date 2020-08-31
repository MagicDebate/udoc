@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Панель управления</div>

                <div class="panel-body">
                  <form action="{{ url('newdoc') }}" method="post">
                     {{ csrf_field() }}
                    <input type="hidden" value="11001" name="type"></input>
                    <a href="#" style="text-decoration:none;"><button type="submit" class="btn btn-lg center-block btn-outline-secondary">Создать Р11001</button></a>
                  </form>
                </div>



 <div class="panel-body">
<table class="table table-striped task-table">

<!-- Заголовок таблицы -->
<thead>
<th>Документы</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</thead>

<!-- Тело таблицы -->
<tbody>
@foreach ($docs as $doc)
<tr>
  <!-- Имя задачи -->
  <td class="table-text">
    <div>{{ $doc->docname }}</div>
  </td>
  <td class="table-text">
    <div>Р{{ $doc->type }}</div>
  </td>
  <td class="table-text">
    <div>Создан - {{ $doc->created_at }}<br>Обновлен - {{ $doc->updated_at }}</div>
  </td>

  <td style="display: flex;
    align-items: center;
    justify-content: space-evenly;">
    <form action="/delete/{{ $doc->id }}" method="POST">
     {{ csrf_field() }}
     {{ method_field('DELETE') }}
  <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
 </form>

    <a href="/open/{{$doc->id}}"><button type="button" class="btn btn-outline-dark"><i class="far fa-edit"></i></button></a>
  </td>
</tr>
@endforeach
</tbody>
</table>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
