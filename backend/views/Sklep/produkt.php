<!-- Główna treść strony -->
	<main>
	<div class="container">

	  <div class="row">

		<div class="col-lg-3">
      <div class="pt-5">
        <?php if ($_SESSION['category'] === "Pan"){?>
      <img src="<?php echo ROOT_URL;?>assets/img/dziad.png" alt="" class="rotate-object" width="267" height="368"/>
    <?php }else{?>
      <img src="<?php echo ROOT_URL;?>assets/img/baba.png" alt="" class="rotate-object" width="267" height="368"/>
    <?php }?>
      </div>
      <h1 class="my-4"><?php echo $_SESSION['category'];?></h1>
		</div>
		<!-- /.col-lg-3 -->
<?php //foreach ($viewmodel as $item) { ?>
		<div class="col-lg-9">

		  <div class="card mt-4">
			<img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
			<div class="card-body">
			  <h3 class="card-title"><?php echo $viewmodel['product_name']; ?>tutaj</h3>
			  <h4>Cena produktu: <?php echo $viewmodel['product_cost']; ?> zł
			  <br>
			  Stan magazynowy: <?php echo $viewmodel['product_stock']; ?> sztuk</h4>
			 
			</div>
		  </div>
		  <!-- /.card -->

		  <div class="card card-outline-secondary my-4">
			<div class="card-header">
			  Opis produktu
			</div>
			<div class="card-body">
			  <?php echo $viewmodel['product_description']; ?>
			  <hr>
			  <a href="#" class="btn btn-success">Dodaj do koszyka</a>
			</div>
		  </div>
		  <!-- /.card -->

		</div>
  <?php // } ?>
		<!-- /.col-lg-9 -->

	  </div>

	</div>
	</main> <!-- koniec głównej treści strony -->
