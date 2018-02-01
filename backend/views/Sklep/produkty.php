<!-- Główna treść strony -->
<main>
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
			<a href="<?php echo ROOT_URL; ?>sklep/kategoria/<?php echo $_SESSION['category_id']; ?>" class="btn my-button standard-buttons btn-lg px-5 py-2 mt-5"><i class="fa fa-arrow-left pr-2" aria-hidden="true"></i> Wróć</a>
        <div class="pt-5 side-image">
          <?php if ($_SESSION['category'] === "Pan"){?>
        <a href="<?php echo ROOT_URL; ?>sklep/kategoria/1"><img src="<?php echo ROOT_URL;?>assets/img/dziad.png" alt="" class="rotate-object img-fluid" width="267"/></a>
      <?php }else{?>
        <a href="<?php echo ROOT_URL; ?>sklep/kategoria/9"><img src="<?php echo ROOT_URL;?>assets/img/baba.png" alt="" class="rotate-object img-fluid" width="267"/></a>
      <?php }?>
        </div>
		<div class="text-center category-title">
			<h2 class="my-4"><strong><a href="<?php echo ROOT_URL;?>sklep/kategoria/<?php if ($_SESSION['category'] === "Pan") {echo "1";}else{echo "9";} ?> "><?php echo $_SESSION['category'];?></a> </strong></h2>
			<hr>
			<h3> <a href="<?php echo ROOT_URL;?>sklep/produkty/<?php echo $_SESSION['category_id']; ?>"> <?php echo $_SESSION['current_category']; ?></a></h3>
		</div>


      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row mt-5">
          <?php $i = 0;
          foreach($viewmodel as $product){
            $i++;

            ?>

            <div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
			  <a href="<?php echo ROOT_URL;?>sklep/produkt/<?php echo $product['product_id'];?> " class="h-100 product-background">
                <img class="card-img-top" src="<?php echo ROOT_URL; echo $product['product_image']; ?>" alt="Zdjęcia dla <?php echo $product['product_name']; ?>">
                <div class="card-body">
                  <h4 class="card-title text-center pt-2"><?php echo $product['product_name']; ?></h4>
                  <!-- <p class="card-text"><?php //echo $product['product_description']; ?></p> -->
                </div>
			  </a>
                <div class="card-footer">
                  <a href="<?php echo ROOT_URL;?>sklep/produkt/<?php echo $product['product_id'];?> " class="btn my-button standard-buttons btn-lg btn-block">Zobacz</a>
                </div>
              </div>
            </div>
          <?php } ?>
        </main> <!-- koniec głównej treści strony -->
