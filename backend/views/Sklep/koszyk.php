<!-- Główna treść strony -->
	<main>
    <div class="container mt-5 h-100">
		<div class="row">
			<!-- Cart item -->
			<div class="col-12 col-lg-8">
				<div class="wrap-table-shopping-cart">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1 col-6 col-md-3"></th>
							<th class="column-2 col-6 col-md-3">Produkt</th>
							<th class="column-3 col-4 col-md-2">Cena</th>
							<th class="column-4 col-4 col-md-2">Ilość</th>
							<th class="column-5 col-4 col-md-2">Suma</th>
						</tr>
<?php foreach($viewmodel as $item){?>
						<tr class="table-row">
							<td class="column-1 col-6 col-md-3">
							<div class="row">
								<div class="col-4 m-auto delete" id="delete-icon" data-id="<?php echo $item['product_id'] ?>" data-price="<?php echo $item['product_cost'];?>" data-count="<?php echo $_SESSION['cart'][$item['product_id']]; ?>">
									<i class="fa fa-times float-left" aria-hidden="true"></i>
								</div>
									<div class="col-8 cart-img-product">
										<a href="<?php echo ROOT_URL;?>Sklep/produkt/<?php echo $item['product_id']; ?>">
										<img src="<?php echo ROOT_URL;echo $item['product_image'];?>" alt="Zdjecie produktu"></a>
									</div>
							</div>
							</td>
							<td class="column-2 col-6 col-md-3"><a href="<?php echo ROOT_URL;?>Sklep/produkt/<?php echo $item['product_id']; ?>"><?php echo $item['product_name']; ?></a></td>
							<td class="column-3 col-4 col-md-2"><?php echo $item['product_cost']; ?> zł</td>
							<td class="column-4 col-4 col-md-2">
								<div>
									<!-- <button>
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button> -->
									<div class="quantity_selector">
										<span class="minus" id="minus" data-id="<?php echo $item['product_id']; ?>" data-price="<?php echo $item['product_cost'];?>" data-count="<?php echo $_SESSION['cart'][$item['product_id']]; ?>"><i class="fa fa-minus"  aria-hidden="true"></i></span>
										<span id="quantity_value"><?php echo $_SESSION['cart'][$item['product_id']]; ?></span>
										<span class="plus" id="plus" data-id="<?php echo $item['product_id']; ?>" data-price="<?php echo $item['product_cost'];?>" data-count="<?php echo $_SESSION['cart'][$item['product_id']]; ?>"><i class="fa fa-plus"   aria-hidden="true"></i></span>
									</div>
									<!-- <input class="t-center num-product" type="text" name="num-product1" value="<?php //echo $_SESSION['cart'][$item['product_id']]; ?>" readonly="readonly"> -->

									<!-- <button>
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button> -->
								</div>
							</td>
							<td class="column-5 col-4 col-md-2"><?php echo $_SESSION['product_value'][$item['product_id']]; ?> zł</td>
						</tr>
<?php } ?>
					</table>
				</div>
			</div>

			<!-- Total -->
			<div class="col-12 col-lg-4">
					<div class="card">
						<h5 class="card-header">Podsumowanie </h5>
						<div class="card-body">

								<span><strong>Wysyłka:</strong></span>
<hr>
								<div class="form-check pt-3">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Dowóz" checked> Dowóz
									</label>
								</div>

								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Odbiór osobisty">
										Odbiór osobisty
									</label>
								</div>
<hr>
							<div>
								<span><strong>Suma:</strong></span>

								<span>
									<?php echo $_SESSION['order_value']; ?> zł
								</span>
							</div>

							<div>
								<!-- Button -->
								<a href="<?php echo ROOT_URL;?>sklep/kasa" class="btn my-button standard-buttons btn-lg mt-3">Przejdź do kasy</a>
							</div>

					</div>
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
				var product_cost = $(this).attr("data-price");
				var product_id = $(this).attr("data-id");
				var product_count_now = quantity;

				$.ajax({
		        url: '<?php echo ROOT_URL; ?>views/Sklep/UpdateCart.php',
		        type: 'POST',
						data: {product_cost , product_id , product_count_now },
		        success:function(response){
		 							 location.reload();
//alert("test");
		 	        }

		   });

		});
		$("#minus").click(function(){
			var quantity = parseInt($("#quantity_value").text());
			quantity--;
			if (quantity<=0){quantity = 1;}
			$("#quantity_value").text(quantity);
				var product_cost = $(this).attr("data-price");
				var product_id = $(this).attr("data-id");
				var product_count_now = quantity;

				$.ajax({
		        url: '<?php echo ROOT_URL; ?>views/Sklep/UpdateCart.php',
		        type: 'POST',
						data: {product_cost , product_id , product_count_now },
		        success:function(response){
		 							 location.reload();

		 	        }

		   });

		});
		// $("#minus").click(function(){
		// 	var quantity = parseInt($("#quantity_value").text());
		// 	quantity--;
		// 	if (quantity<=0){quantity = 1;}
		// 	$("#quantity_value").text(quantity);
		// })
		$(".delete").click(function(){
			var id_now = $(this).attr("data-id");
			var price_now = $(this).attr("data-price");
			var count_now = $(this).attr("data-count");
			//this.fadeOut();
			//alert(id);
			$.ajax({
				  type: 'POST',
	        url: '<?php echo ROOT_URL; ?>views/Sklep/DelFromCart.php',
					data: {id: id_now, price: price_now, count: count_now},
	        success:function(response){
							 location.reload()

	        }
	   });
});


	});
	</script>
