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
								<div class="cart-img-product">
									<img src="images/item-10.jpg" alt="Zdjecie produktu">
								</div>
							</td>
							<td class="column-2 col-6 col-md-3"><?php echo $item['product_name']; ?></td>
							<td class="column-3 col-4 col-md-2"><?php echo $item['product_cost']; ?> zł</td>
							<td class="column-4 col-4 col-md-2">
								<div>
									<!-- <button>
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button> -->

									<input class="t-center num-product" type="text" name="num-product1" value="<?php echo $_SESSION['cart'][$item['product_id']]; ?>" readonly="readonly">

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

								<div class="form-check pt-3">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Dowóz" checked>
										Dowóz
									</label>
								</div>

								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Odbiór osobisty">
										Odbiór osobisty
									</label>
								</div>

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
