//strzałka przekierowywująca na samą górę
var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('#myBtn').fadeIn('slow');
	} else {
		$('#myBtn').fadeOut('slow');
	}
});

//przekierowanie na górę po kliknięciu na strzałkę
$(document).on('click','#myBtn', function(){
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});

//smooth scroll w zakładce o sklepie
$(document).on('click', '.read-more', function(event){
	event.preventDefault();

	$('html, body').animate({
		scrollTop: $( $.attr(this, 'href') ).offset().top
	}, 600);
});

//utrzymanie koloru nazw w menu po najechaniu na dropdown
$(document).ready(function(){
	$("#js-dropdown-pani").hover(function () {
		$("#js-menu-pani > a").css("color", "#fff");
	}, function(){
		$("#js-menu-pani > a").css("color", "#444");
	});
});
$(document).ready(function(){
	$("#js-dropdown-pan").hover(function () {
		$("#js-menu-pan > a").css("color", "#fff");
	}, function(){
		$("#js-menu-pan > a").css("color", "#444");
	});
});

$(document).ready(function(){
 $("#pani > div > .main-category > img").hover(function () {
    $("#pani .main-buttons").toggleClass("img_hover");
 });
  $("#pan > div > .main-category > img").hover(function () {
    $("#pan .main-buttons").toggleClass("img_hover");
 });
  $("#pani .main-buttons").hover(function () {
    $("#pani > div > .main-category > img").toggleClass("button_hover");
 });
   $("#pan .main-buttons").hover(function () {
    $("#pan > div > .main-category > img").toggleClass("button_hover");
 });
});

//alert potwierdzenia w kontakcie
$(".submit").click(function(){
		alert("Dziękujemy za wysłanie prośby o kontakt. Proszę oczekiwać kontaktu telefonicznego.")
})



// $("#add_to_cart").click(function(){
// 	var product_cost = <?php //echo $viewmodel['product_cost'];?>;
// 	var product_id = <?php //echo $viewmodel['product_id']; ?>;
// 	var product_count = parseInt($("#quantity_value").text());
// 	$.ajax({
// 			url: '<?php //echo ROOT_URL; ?>views/Sklep/Addtocart.php',
// 			type: 'POST',
// 			data: {product_cost , product_id , product_count},
// 			success:function(response){
//
//
// 				}
//
//  });
//
// });