<!-- Główna treść strony -->
	<main>
		<div class="container">

			  <div class="row">

				<div class="col-lg-3">
			<a class="btn my-button standard-buttons btn-lg px-5 py-2 mt-5"><i class="fa fa-arrow-left pr-2" aria-hidden="true"></i> Wróć</a>
          <div class="pt-5">
						<?php if ($_SESSION['category'] === "Pan"){?>
          <a href="<?php echo ROOT_URL; ?>sklep/kategoria/1"><img src="<?php echo ROOT_URL;?>assets/img/dziad.png" alt="" class="rotate-object img-fluid" width="267"/></a>
				<?php }else{?>
					<a href="<?php echo ROOT_URL; ?>sklep/kategoria/9"><img src="<?php echo ROOT_URL;?>assets/img/baba.png" alt="" class="rotate-object img-fluid" width="267"/></a>
				<?php }?>
          </div>
		  <div class="text-center" style="border:1px solid #000">
				<h1 class="my-4"><strong><?php echo $_SESSION['category'];?></strong></h1>
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
						<?php if ($_SESSION['category'] === "Pan"){?>
						<img class="d-block img-fluid" src="<?php echo ROOT_URL;?>assets/img/clothes1.jpg" alt="First slide">
						<?php }else{?>
						<img class="d-block img-fluid" src="<?php echo ROOT_URL;?>assets/img/clothes4.jpg" alt="Third slide">										
						<?php }?>	
					  </div>
					  <div class="carousel-item">
						<img class="d-block img-fluid" src="<?php echo ROOT_URL;?>assets/img/clothes2.jpg" alt="Second slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block img-fluid" src="<?php echo ROOT_URL;?>assets/img/clothes4.jpg" alt="Third slide">
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
