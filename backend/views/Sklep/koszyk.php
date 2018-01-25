<!-- Główna treść strony -->
	<main>
    <div class="container">
			<!-- Cart item -->
			<div>
				<div class="wrap-table-shopping-cart">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Produkt</th>
							<th class="column-3">Cena</th>
							<th class="column-4">Ilość</th>
							<th class="column-5">Suma</th>
						</tr>
<?php foreach($viewmodel as $item){?>
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product">
									<img src="images/item-10.jpg" alt="Zdjecie produktu">
								</div>
							</td>
							<td class="column-2"><?php echo $item['product_name']; ?></td>
							<td class="column-3"><?php echo $item['product_cost']; ?></td>
							<td class="column-4">
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
							<td class="column-5"><?php echo $_SESSION['product_value'][$item['product_id']]; ?></td>
						</tr>
<?php } ?>
					</table>
				</div>
			</div>

			<!-- Total -->
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<h5 class="card-header">Podsumowanie </h5>
						<div class="card-body">
							<!--  -->
							<div>
								<span><strong>Kwota:</strong></span>

								<span>
									<?php echo $_SESSION['order_value']; ?>
								</span>
							</div>

							<div>
								<span><strong>Wysyłka:</strong></span>

								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Dowóz" checked>
										Dowóz 15 zł
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
									39.00 zł
								</span>
							</div>

							<div>
								<!-- Button -->
								<a href="<?php echo ROOT_URL;?>sklep/kasa" class="btn btn-success mt-3">Przejdź do kasy</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main> <!-- koniec głównej treści strony -->
