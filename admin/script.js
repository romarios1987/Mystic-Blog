$(document).ready(function(){
	$(".button-collapse").sideNav();
	$('.collapsible').collapsible();
$('select').material_select();

});
var ck = document.getElementById('textarea1');
if(ck){
    CKEDITOR.replace( 'ck_editor');
}






