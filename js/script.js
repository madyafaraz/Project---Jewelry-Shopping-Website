
$('#imgDiv').hide();

$(function () {
$('#checkAddress').change(function () {
if ($('#checkAddress').is(':checked')){
$('[name="billAddress"]').val($('[name="shipAddress"]').val());
$('[name="billCity"]').val($('[name="shipCity"]').val());
$('[name="billZipcode"]').val($('[name="shipZipcode"]').val());
$('[name="billState"]').val($('[name="shipState"]').val());}
else
$('#billingAddress').show();
});
});

$(function () {
$('#changeImage').change(function(){
 if($('#changeImage').is(':checked'))
 $('#imgDiv').show();
 else
  $('#imgDiv').hide();
});

});


