<!-- Główna treść strony -->
<main>
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
			<a href="<?php echo ROOT_URL; ?>sklep/kategoria/<?php echo $_SESSION['category_id']; ?>" class="btn my-button standard-buttons btn-lg px-5 py-2 mt-5"><i class="fa fa-arrow-left pr-2" aria-hidden="true"></i> Wróć</a>
        <div class="pt-5">
          <?php if ($_SESSION['category'] === "Pan"){?>
        <a href="<?php echo ROOT_URL; ?>sklep/kategoria/1"><img src="<?php echo ROOT_URL;?>assets/img/dziad.png" alt="" class="rotate-object img-fluid" width="267"/></a>
      <?php }else{?>
        <a href="<?php echo ROOT_URL; ?>sklep/kategoria/9"><img src="<?php echo ROOT_URL;?>assets/img/baba.png" alt="" class="rotate-object img-fluid" width="267"/></a>
      <?php }?>
        </div>
		  <div class="text-center" style="border:1px solid #000">
				<h1 class="my-4"><strong><?php echo $_SESSION['category'];?> / <?php echo $_SESSION['current_category']; ?></strong></h1>
		  </div>


      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
          <?php $i = 0;
          foreach($viewmodel as $product){
            $i++;

            ?>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card h-100">
                <img class="card-img-top" src="<?php echo ROOT_URL; echo $product['product_image']; ?>" alt="Zdjęcia dla <?php echo $product['product_name']; ?>">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $product['product_name']; ?></h4>
                  <!-- <p class="card-text"><?php //echo $product['product_description']; ?></p> -->
                </div>
                <div class="card-footer">
                  <a href="<?php echo ROOT_URL;?>sklep/produkt/<?php echo $product['product_id'];?> " class="btn btn-primary">Zobacz</a>
                </div>
              </div>
            </div>
          <?php } ?>
        </main> <!-- koniec głównej treści strony -->
