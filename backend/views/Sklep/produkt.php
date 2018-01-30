<!-- Główna treść strony -->
<main>
<div class="container">

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">

						<div class="col-lg-3">
							<a href="<?php echo ROOT_URL; ?>sklep/produkty/<?php echo $viewmodel['product_category']; ?>" class="btn my-button standard-buttons btn-lg px-4 py-2 mt-5"><i class="fa fa-arrow-left pr-2" aria-hidden="true"></i> Wróć</a>
						  <div class="pt-5">
							<?php if ($_SESSION['category'] === "Pan"){?>
							  <a href="<?php echo ROOT_URL; ?>sklep/kategoria/1"><img src="<?php echo ROOT_URL;?>assets/img/dziad.png" alt="" class="rotate-object img-fluid" width="267"/></a>
							<?php }else{?>
							  <a href="<?php echo ROOT_URL; ?>sklep/kategoria/9"><img src="<?php echo ROOT_URL;?>assets/img/baba.png" alt="" class="rotate-object img-fluid" width="267"/></a>
							<?php }?>
						  </div>
						  <div class="text-center" style="border-top:1px solid silver">
								<h2 class="my-4"><strong><a href="<?php echo ROOT_URL;?>sklep/kategoria/<?php if ($_SESSION['category'] === "Pan") {echo "1";}else{echo "9";} ?> "><?php echo $_SESSION['category'];?></a> </strong></h2>
								<hr>
								<h3> <a href="<?php echo ROOT_URL;?>sklep/produkty/<?php echo $_SESSION['category_id']; ?>"> <?php echo $_SESSION['current_category']; ?></a></h3>
						  </div>
						</div>
						<div class="col-lg-9 order-lg-2 order-1">
								<img class="card-img-top img-fluid" src="<?php echo ROOT_URL; echo $viewmodel['product_image'];//echo $viewmodel['category_photo']; ?>" alt="Zdjecie produktu <?php echo $viewmodel['product_name']; ?>">
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
							<span class="minus" id="minus"><i class="fa fa-minus"  aria-hidden="true"></i></span>
							<span id="quantity_value">1</span>
							<span class="plus" id="plus"><i class="fa fa-plus"   aria-hidden="true"></i></span>
						</div>
					</div>
					<div class="" id="count_in_cart_div">
					<?php if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$viewmodel['product_id']]) && !$_SESSION['cart'][$viewmodel['product_id']] == null){ ?>
					<!-- <div class="" id="count_in_cart_div"> -->
						W koszyku: <span id="count_in_cart"> <?php echo $_SESSION['cart'][$viewmodel['product_id']]; ?></span>
					<!-- </div> --><?php } ?>
					</div>
					<button type="button" class="btn my-button standard-buttons btn-lg px-5 py-2 mt-4" name="dodaj" id = "add_to_cart" >Dodaj do koszyka</button>
				</div>
			</div>
		</div>

	</div>
</main> <!-- koniec głównej treści strony -->
<script>
$(document).ready(function(){
	$("#plus").click(function(){
		var quantity = parseInt($("#quantity_value").text());
		quantity++;
		$("#quantity_value").text(quantity);
	})
	$("#minus").click(function(){
		var quantity = parseInt($("#quantity_value").text());
		quantity--;
		if (quantity<=0){quantity = 1;}
		$("#quantity_value").text(quantity);
	})
	$("#add_to_cart").click(function(){
		var product_cost = <?php echo $viewmodel['product_cost'];?>;
		var product_id = <?php echo $viewmodel['product_id']; ?>;
		var product_count = parseInt($("#quantity_value").text());
		$.ajax({
        url: '<?php echo ROOT_URL; ?>views/Sklep/Addtocart.php',
        type: 'POST',
				data: {product_cost , product_id , product_count},
        success:function(response){


 	        }

   });

	 $("#cart_value").text(parseInt($("#cart_value").text()) + (product_cost*product_count));
	 if ($("#count_in_cart").length){
		$("#count_in_cart").text(parseInt($("#count_in_cart").text()) + product_count);
	} else {
		$("#count_in_cart_div").append("W koszyku: <span id=\"count_in_cart\"> </span>");
		$("#count_in_cart").text(product_count);
	}

	});
});
</script>
