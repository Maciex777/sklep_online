<!-- Główna treść strony -->
	<main>
	<div class="container">

	  <div class="row">

		<div class="col-lg-3">
			<a href="<?php echo ROOT_URL; ?>sklep/produkty/<?php echo $viewmodel['product_category']; ?>" class="btn my-button standard-buttons btn-lg px-5 py-2 mt-5"><i class="fa fa-arrow-left pr-2" aria-hidden="true"></i> Wróć</a>
		  <div class="pt-5">
			<?php if ($_SESSION['category'] === "Pan"){?>
			  <a href="<?php echo ROOT_URL; ?>sklep/kategoria/1"><img src="<?php echo ROOT_URL;?>assets/img/dziad.png" alt="" class="rotate-object img-fluid" width="267"/></a>
			<?php }else{?>
			  <a href="<?php echo ROOT_URL; ?>sklep/kategoria/9"><img src="<?php echo ROOT_URL;?>assets/img/baba.png" alt="" class="rotate-object img-fluid" width="267"/></a>
			<?php }?>
		  </div>
		  <div class="text-center" style="border:1px solid #000">
				<h1 class="my-4"><strong><?php echo $_SESSION['category'];?></strong></h1>
		  </div>
		</div>
		<!-- /.col-lg-3 -->
<?php  //foreach ($viewmodel as $item) {

  ?>
		
		<div class="col-lg-9">
		  <div class="card mt-4">
			<img class="card-img-top img-fluid" src="<?php echo ROOT_URL; //echo $viewmodel['category_photo']; ?>" alt="">
			<div class="card-body">
			  <h3 class="card-title"><?php echo $viewmodel['product_name']; ?></h3>
			  <h4>Cena : <?php echo $viewmodel['product_cost']; ?> zł</h4>
				<h4>Stan magazynowy: <?php echo $viewmodel['product_stock']; ?> sztuk</h4>

			</div>
		  </div>
		  <!-- /.card -->

		  <div class="card card-outline-secondary my-4">
			<div class="card-header">
			  Opis produktu
			</div>
			<div class="card-body">
			  <p><?php echo $viewmodel['product_description']; ?></p>
			  <hr>

				<button type="button" class="btn my-button standard-buttons btn-lg px-5 py-2" name="dodaj" id = "add_to_cart" >Dodaj do koszyka</button>


				<!-- <form action="<?php //echo ROOT_URL;?>sklep/produkt/<?php// echo $viewmodel['product_id'];?>" method="post">

				<input type="submit" name="cart_action" value="Dodaj do koszyka">
				</form> -->
				<?php //if (isset($_SESSION['cart'])){
				//echo "<pre>";
				//print_r($_SESSION['cart']);
				//echo "</pre>";}?>
			</div>
		  </div>
		  <!-- /.card -->

		</div>
		<!-- /.col-lg-9 -->

	  </div>

	</div>
	</main> <!-- koniec głównej treści strony -->
	<?php //require('./skrypt.js');
	?>
<script>
// function time(){
// 	$("#add_to_cart").fadeOut();
// }
// setTimeout("time()",1000);


$(document).ready(function(){
	$("#add_to_cart").click(function(){

		$.ajax({
        url: '<?php echo ROOT_URL; ?>views/Sklep/Addtocart.php',
        type: 'POST',

        success:function(response){
           alert("Dodano do koszyka");
        }
   });
	});
});



</script>
