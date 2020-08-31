$(document).ready(function(){
  $("#address").suggestions({
     token: "a97b0b9c0c286a46340a9f3de568c13e1c4d24d6",
     type: "FIAS",
     onSelect: showSelected
     /* Вызывается, когда пользователь выбирает одну из подсказок */
  });



function showSelected(suggestion) {
  var address = suggestion.data;
  $("#postcode").val(address.postal_code);
  $("#subject").val(String(address.region_kladr_id).slice(0, 2));
  $("#region").val(address.region_type);
  $("#nameregion").val(address.region);
  $("#city").val(address.city_type_full);
  $("#namecity").val(address.city);
  $("#street").val(address.street);
  $("#house").val(address.house);
}

    $( "#fullname" ).focus(function() {
    $( "#fullname" ).val($("#firmform").val()+' ');
  });

  $( "#lang" ).change(function() {
  const str = $( "#lang" ).val()
$( "#langpadej" ).val(str.replace(/ий$/gi, 'ом'));
});

   owl = $('.owl-carousel').owlCarousel({items:1,mouseDrag:false,});
   $('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
})
$('.customPrevBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})
  if($("input[name='exampleRadios']:checked").val() == 'yes'){
    $("#fullforeignname").show();
  }
        $("input[name='exampleRadios']").change(function(){
          if($("input[name='exampleRadios']:checked").val() == 'yes'){
        $("#fullforeignname").show();
      } else { $("#fullforeignname").hide(); }
        });
    });



$( function() {
    var availableForms = [
      {label:"Общество с ограниченной ответственностью",value:"ООО"},
      {label:"Открытое акционерное общество",value:"ОАО"},
    {label:"Страховое акционерное общество",value:"Страховое акционерное общество"}];
    var availableLangs = [
      {label:"Английский",value:"Английский"},
      {label:"Казахский",value:"Казахский"},
    {label:"Немецкий",value:"Немецкий"}];
    $( "#firmform" ).autocomplete({
      source: availableForms,
      mustMatch: true,
    });
    $( "#lang" ).autocomplete({
      source: availableLangs,

    });
  } );
