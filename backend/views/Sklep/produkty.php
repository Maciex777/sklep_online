<!-- Główna treść strony -->
<main>
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <div class="pt-5">
          <? if ($_SESSION['category'] === "Pan"){?>
        <img src="<?php echo ROOT_URL;?>assets/img/dziad.png" alt="" class="rotate-object" width="267" height="368"/>
      <?php }else{?>
        <img src="<?php echo ROOT_URL;?>assets/img/baba.png" alt="" class="rotate-object" width="267" height="368"/>
      <?php }?>
        </div>
        <h1 class="my-4"><?php echo $_SESSION['category'];?></h1>



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
                <img class="card-img-top" src="<?php echo ROOT_URL; echo $cat['category_photo']; ?>" alt="Zdjęcia dla <?php echo $product['product_name']; ?>">
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
