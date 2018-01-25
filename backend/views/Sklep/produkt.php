<!-- Główna treść strony -->
	<main>
	<div class="container">

	  <div class="row">

		<div class="col-lg-3">
      <div class="pt-5">
        <? if ($_SESSION['category'] === "Pan"){?>
      <a href="<?php echo ROOT_URL; ?>sklep/kategoria/1"><img src="<?php echo ROOT_URL;?>assets/img/dziad.png" alt="" class="rotate-object" width="267" height="368"/></a>
    <?php }else{?>
      <a href="<?php echo ROOT_URL; ?>sklep/kategoria/9"><img src="<?php echo ROOT_URL;?>assets/img/baba.png" alt="" class="rotate-object" width="267" height="368"/></a>
    <?php }?>
      </div>
      <h1 class="my-4"><?php echo $_SESSION['category'];?></h1>
		</div>
		<!-- /.col-lg-3 -->
<?php  //foreach ($viewmodel as $item) {

  ?>
		<div class="col-lg-9">

		  <div class="card mt-4">
			<img class="card-img-top img-fluid" src="<?php echo ROOT_URL; echo $cat['category_photo']; ?>" alt="">
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
				<form action="<?php echo ROOT_URL;?>sklep/produkt/<?php echo $viewmodel['product_id'];?>" method="post">

				<input type="submit" name="cart_action" value="Dodaj do koszyka">
				</form>
				<?php //if (isset($_SESSION['cart'])){
				//echo "<pre>";
				//print_r($_SESSION['cart']);
				//echo "</pre>";}?>
			</div>
		  </div>
		  <!-- /.card -->

		</div>
  <?php  //} ?>
		<!-- /.col-lg-9 -->

	  </div>

	</div>
	</main> <!-- koniec głównej treści strony -->
