<?php
    $background_counter = "/assets/kson/img/bg-5.png";
    $experience = 24;
    $project_taken = 340;
    $awards_won = 89;
    $social_followers = 200;
?>
<!-- COUNTER START -->
<div class="section-full overlay-wraper sx-bg-secondry mobile-page-padding  p-t80 p-b50 bg-parallax ml-auto"  data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg-1.jpg)">
    <div class="overlay-main bg-black opacity-05"></div>
    <div class="container">
        <div class="section-content">

            <div class="counter-blocks">
                <div class="row">
                    <div class="col-xl-3 col-md-6 m-b30 ">
                        <div class="sx-count text-white sx-icon-box-wraper bg-repeat p-a30" style="background-image:url(<?=$background_counter?>)">
                            <h2 class="m-t0 sx-text-primary text-right"><span class="counter"><?=$experience?></span></h2>
                            <h4 class="m-b0"><?=lang('Our Experience')?></h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 m-b30">
                        <div class="sx-count  text-white sx-icon-box-wraper bg-repeat p-a30" style="background-image:url(<?=$background_counter?>)">
                            <h2 class="m-t0  sx-text-primary text-right"><span class="counter"><?=$project_taken?></span></h2>
                            <h4 class="m-b0"><?=lang('Project Taken')?></h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 m-b30">
                        <div class="sx-count  text-white sx-icon-box-wraper bg-repeat p-a30" style="background-image:url(<?=$background_counter?>)">
                            <h2 class="m-t0  sx-text-primary text-right"><span class="counter"><?=$awards_won?></span></h2>
                            <h4 class="m-b0"><?=lang('Awards Won')?></h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 m-b30">
                        <div class="sx-count  text-white sx-icon-box-wraper bg-repeat  p-a30" style="background-image:url(<?=$background_counter?>)">
                            <h2 class="m-t0  sx-text-primary text-right"><span class="counter"><?=$social_followers?></span><span>K</span></h2>
                            <h4 class="m-b0"><?=lang('Social Followers')?></h4>
                        </div>
                    </div>
                </div>
            </div>

       </div>
   </div>

</div>
<!-- COUNTER  END -->
