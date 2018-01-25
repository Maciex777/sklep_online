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
            foreach($viewmodel as $cat){
              $i++;
              $category = ucfirst(str_replace('_',' ',$cat['category']));
              ?>
					<div class="col-lg-4 col-md-6 mb-4">
					  <div class="card h-100">
						<a href="<?php echo ROOT_URL;?>sklep/produkty/<?php echo $cat['id'];?>"><img class="card-img-top" src="<?php echo ROOT_URL; echo $cat['category_photo']; ?>" alt="Zdjęcia dla <?php echo $category; ?>"></a>
						<div class="card-body">
						  <h4 class="card-title">
							<a href="<?php echo ROOT_URL;?>sklep/produkty/<?php echo $cat['id'];?>"> <?php echo $category; ?></a>
						  </h4>

						  <p class="card-text"> <?php echo $cat['category_description']; ?></p>
						</div>
          </div>
        </div>
            <?php } ?>
          </main> <!-- koniec głównej treści strony -->
