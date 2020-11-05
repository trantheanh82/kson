<!-- INNER PAGE BANNER -->
  <div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center" id='page_inner'  data-stellar-background-ratio="0.5" >
  	<div class="overlay-main bg-black opacity-07"></div>
      <div class="container">
          <div class="sx-bnr-inr-entry">
          	<div class="banner-title-outer">
              	<div class="banner-title-name">
              		<h2 class="m-tb0"><?=$page_inner_title?></h2>
                  <?php
                      if(isset($page_inner_description))
                        echo "<p>".$page_inner_description."</p>";
                  ?>
                  </div>
              </div>
              <!-- BREADCRUMB ROW -->
                  <div>
                      <?=$this->breadcrumbs->show()?>
                  </div>
              <!-- BREADCRUMB ROW END -->
          </div>
      </div>
  </div>
  <!-- INNER PAGE BANNER END -->
