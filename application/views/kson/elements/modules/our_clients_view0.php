<!-- OUR CLIENTS -->
<div class="section-full  mobile-page-padding bg-gray  p-t80 p-b50 bg-repeat" style="background-image:url(/assets/kson/img/bg-12.jpg);">

<div class="container">

        <!-- TITLE START -->
<div class="section-head">
<div class="sx-separator-outer separator-left">
  <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/img/cross-line2.png)">
    <h3 class="sep-line-one"><?=lang('Our Clients')?></h3>
  </div>
</div>
</div>
        <!-- TITLE END -->
<div class="section-content">
          <div class="client-grid">

              <div class="row justify-content-center">
                  <?php foreach($clients as $k=>$v):?>
                    <div class="col-lg-3 col-md-4 col-sm-6 m-b30">
                      <?=anchor('javascript:void();',img($v->logo,'',array('alt'=>lang("Client ").$v->name)),array('class'=>'client-logo-pic'))?>
                          <div>
                            <span>&nbsp;</span>
                          </div>
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>
        </div>
    </div>

    <div class="hilite-title text-left p-l50 text-uppercase">
        <strong><?=lang("Clients")?></strong>
    </div>
 </div>
<!-- OUR CLIENTS END -->
