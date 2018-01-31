<!-- <div class="text-center">
	<h1>Welcome To ShareBoard</h1>
	<p class="lead">Find something cool? Share it with our community. Look at other shares as well</p>
	<a class="btn btn-primary text-center" href="<?php //echo ROOT_PATH;?>shares">Share Now</a>
</div> -->
<!-- Główna treść strony -->
<img id="main-background" src="<?php echo ROOT_URL; ?>assets/img/main-background.jpg" alt=""/>
<main>
	<div class="h-100">
		<div class="container-fluid h-100">
			<div class="row h-100 pb-5">
				<div class="col-12">			
					<div id="pani" class="text-md-center fade-in-left col-12 col-sm-6">
					<div><a class="main-category" href="<?php echo ROOT_URL; ?>sklep/kategoria/9"><img src="<?php echo ROOT_URL; ?>assets/img/baba.png" alt="" /></a></div>
					<div><a class="my-button main-buttons" href="<?php echo ROOT_URL; ?>sklep/kategoria/9"><img src="<?php echo ROOT_URL; ?>assets/img/baba.png" alt="" />Pani</a></div>
					</div>

					<div id="pan" class="text-md-center fade-in-right col-12 col-sm-6">
					<div><a class="main-category" href="<?php echo ROOT_URL; ?>sklep/kategoria/1"><img src="<?php echo ROOT_URL; ?>assets/img/dziad.png" alt="" /></a></div>
					<div><a class="my-button main-buttons" href="<?php echo ROOT_URL; ?>sklep/kategoria/1"><img src="<?php echo ROOT_URL; ?>assets/img/dziad.png" alt="" />Pan</a></div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</main> <!-- koniec głównej treści strony -->

<script type="text/javascript">
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
</script>