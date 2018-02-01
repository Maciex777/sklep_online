<!-- Główna treść strony -->
	<main>
		<div class="container">

			  <div class="row">

				<div class="col-lg-3">
			<a href="<?php if ($_SESSION['parent_category_id'] == 0){ echo ROOT_URL;} else { echo ROOT_URL;?>/sklep/kategoria/<?php echo $_SESSION['parent_category_id'];}?> " class="btn my-button standard-buttons btn-lg px-5 py-2 mt-5"><i class="fa fa-arrow-left pr-2" aria-hidden="true"></i> Wróć</a>
          <div class="pt-5 side-image">
						<?php if ($_SESSION['category'] === "Pan"){?>
          <a href="<?php echo ROOT_URL; ?>sklep/kategoria/1"><img src="<?php echo ROOT_URL;?>assets/img/dziad.png" alt="" class="rotate-object img-fluid" width="267"/></a>
				<?php }else{?>
					<a href="<?php echo ROOT_URL; ?>sklep/kategoria/9"><img src="<?php echo ROOT_URL;?>assets/img/baba.png" alt="" class="rotate-object img-fluid" width="267"/></a>
				<?php }?>
          </div>
		<div class="text-center category-title">
			<h2 class="my-4"><strong><?php echo $_SESSION['category'];?></strong></h2>
		</div>



				</div>
				<!-- /.col-lg-3 -->

				<div class="col-lg-9">

				  

				  <div class="row mt-5">
            <?php $i = 0;
            foreach($viewmodel as $cat){
              $i++;
              $category = ucfirst(str_replace('_',' ',$cat['category']));
              ?>
					<div class="col-lg-4 col-md-6 mb-4">
					  <a href="<?php echo ROOT_URL;?>sklep/produkty/<?php echo $cat['id'];?>">
					  <div class="card h-100 product-background">
						<img class="card-img-top" src="<?php echo ROOT_URL; echo $cat['category_photo']; ?>" alt="Zdjęcia dla <?php echo $category; ?>">
						<div class="card-body">
							<h3 class="card-title text-center"> <?php echo $category; ?></h3>
						  <p class="card-text text-center"> <?php echo $cat['category_description']; ?></p>
						</div>
				    </div>
				    </a>
				  </div>
            <?php } ?>
          </main> <!-- koniec głównej treści strony -->
