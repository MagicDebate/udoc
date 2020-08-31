
<form action="{{ $url }}" method="POST">
  {{ csrf_field() }}
  <input type="hidden"  name="type" value="{{$type}}" >
    <div class="owl-carousel owl-theme">
      <div>
    <div class="form-group">

      <input name="docname" type="text" class="form-control" id="names" placeholder="Введите название документа" value="{{$formname}}">
    <small id="passwordHelpBlock" class="form-text text-muted">
    Краткое название для вашего удобства и дальнейшего поиска
  </small>
</div>

<div class="form-group row row-inline">
<label for="exampleFormControlSelect1" class="col-sm-6 col-form-label">Выберите организационно-правовую форму</label>
<div class="col-sm-6">
<input id="firmform" class="form-control" name="firmform" >

</div>
</div>
<div class="form-group row row-inline">
<label for="fullname" class="col-sm-6 col-form-label">Введите полное наименование фирмы</label>
<div class="col-sm-6">
<input type="text" name="fullname" class="form-control" id="fullname" placeholder="">
<small id="passwordHelpBlock" class="form-text text-muted">
Должен быть заполнен. Проверка не проводится
</small>
</div>
</div>
<div class="form-group row row-inline">
<label for="exampleFormControlInput1" class="col-sm-6"> Введите сокращенное наименование фирмы</label>
<div class="col-sm-6">
<input type="text" name="littlename" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
</div>


<div class="form-group">
<div class="row row-inline">
<label class="col-sm-6"> У фирмы будет полное наименование на иностранном языке? </label>
<div class="col-sm-3 form-check-inline">
<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" >
<label class="form-check-label" for="exampleRadios1">
Да
</label>
</div>
<div class="col-sm-3 form-check-inline">
<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
<label class="form-check-label" for="exampleRadios2">
Нет
</label>
</div>
</div>
</div>
<div class="form-group row row-inline" id="fullforeignname" style="display:none;">
<label for="exampleFormControlInput1" class="col-sm-6">Введите полное наименование фирмы на иностранном языке</label>
<div class="col-sm-6">
<input type="text" name="fullforeingname" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
</div>
<div class="form-group row row-inline">
<label for="lang" class="col-sm-6 col-form-label">Выберите язык</label>
<div class="col-sm-6">
<input id="lang" class="form-control" name="lang" >
<br>
<input id="langpadej" type="text" class="form-control" placeholder="Язык в предложном падеже" name="langpadej" >
</div>
</div>

<div class="form-group row row-inline">
<label for="address" class="col-sm-6 col-form-label">Введите адрес</label>
<div class="col-sm-6">
<input id="address" name="address" type="text" />
<input type="hidden" id="postcode" name="postcode">
<input type="hidden" id="region" name="region">
<input type="hidden" id="nameregion" name="nameregion">
<input type="hidden" id="subject" name="subject">
<input type="hidden" id="city" name="city">
<input type="hidden" id="namecity" name="namecity">
<input type="hidden" id="street" name="street">
<input type="hidden" id="house" name="house">
<input type="hidden" id="flat" name="flat">

</div>
</div>


</div>
<div> Content </div>
</div>
<div>
<button type="button" class="btn btn-info customPrevBtn ">Назад</button>
<button type="button" class="btn btn-info customNextBtn ">Далее</button>
</div>
<input type='submit' name='action' value='save'>
<input type='submit' name='action' value='print'>
</form>
