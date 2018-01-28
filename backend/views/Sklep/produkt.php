<!-- Główna treść strony -->
<main>
<div class="container">

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
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
						  <div class="text-center" style="border-top:1px solid silver">
								<h2 class="my-4"><strong><?php echo $_SESSION['category'];?></strong></h2>
								<hr>
								<h3><?php echo $_SESSION['current_category']; ?></h3>
						  </div>
						</div>
						<div class="col-lg-9 order-lg-2 order-1">
								<img class="card-img-top img-fluid" src="<?php echo ROOT_URL; //echo $viewmodel['category_photo']; ?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 mt-5 pt-3">
				<div class="w-100">
					<div class="product_details_title">
						<h2><?php echo $viewmodel['product_name']; ?></h2>
						<p><?php echo $viewmodel['product_description']; ?></p>
					</div>
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span> darmowa dostawa</span>
					</div>
					<span>Cena:</span>
					<div class="product_price mt-4 mx-2"><strong><?php echo $viewmodel['product_cost']; ?> zł</strong></div>
					<div class="mt-4">
						<span>Stan magazynowy:</span>
						<span><strong><?php echo $viewmodel['product_stock']; ?></span><span> sztuk</strong></span>
					</div>
					<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<span>Ilość:</span>
						<div class="quantity_selector">
							<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
							<span id="quantity_value">1</span>
							<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
						</div>
					</div>
					<button type="button" class="btn my-button standard-buttons btn-lg px-5 py-2 mt-4" name="dodaj" id = "add_to_cart" >Dodaj do koszyka</button>
				</div>
			</div>
		</div>

	</div>
</main> <!-- koniec głównej treści strony -->
<script>
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
