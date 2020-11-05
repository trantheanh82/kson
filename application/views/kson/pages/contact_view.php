<!-- CONTENT START -->
        <div class="page-content">

            <?=$this->load->view($template.'/elements/modules/page_inner_view')?>

            <!-- SECTION CONTENTG START -->
            <div class="section-full p-tb80 inner-page-padding">
                <!-- LOCATION BLOCK-->
                <div class="container">

                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="section-content">
                        <!-- CONTACT FORM-->
                        <div class="row">
                        	<div class="col-lg-8 col-md-12 col-sm-12">
                            	<form class="contact-form cons-contact-form bg-gray p-a30" method="post" action="">
                                    <div class="contact-one">

                                        <!-- TITLE START -->
                                        <div class="section-head">
                                            <div class="sx-separator-outer separator-left">
                                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/images/background/cross-line2.png)">
                                                    <h3 class="sep-line-one"><?=lang('Form Contact')?></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- TITLE END -->

                                        <div class="form-group">
                                            <input name="name" type="text" required class="form-control" placeholder="<?=lang("Name")?>">
                                        </div>

                                        <div class="form-group">
                                            <input name="phone" type="text" class="form-control" required placeholder="<?=lang("Phone")?>">
                                        </div>

                                        <div class="form-group">
                                            <input name="email" type="text" class="form-control" required placeholder="<?=lang("Email")?>">
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" rows="4" class="form-control " required placeholder="<?=lang("Message")?>"></textarea>
                                        </div>

                                    	<div class="text-right">
                                            <button name="submit" type="submit" value="Submit" class="site-button btn-half"><span> <?=lang("Send")?></span>

                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                            	<div class="contact-info block-shadow bg-white bg-center p-a40" style="background-image:url(/assets/kson/images/background/bg-map.png)">

                                    <div>
                                        <!-- TITLE START -->
                                        <div class="section-head">
                                            <div class="sx-separator-outer separator-left">
                                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/images/background/cross-line2.png)">
                                                    <h3 class="sep-line-one"><?=lang("Info")?></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- TITLE END -->
                                        <div class="sx-icon-box-wraper left p-b30">
                                            <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0"><?=lang("Phone number")?></h5>
                                                <p><?=$Settings['company_phone_1']?></p>
                                            </div>
                                        </div>

                                        <div class="sx-icon-box-wraper left p-b30">
                                            <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0"><?=lang("Email address")?></h5>
                                                <p><?=$Settings['company_email']?></p>
                                            </div>
                                        </div>

                                        <div class="sx-icon-box-wraper left">
                                            <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0"><?=lang("Address info")?></h5>
                                                <p><?=$Settings['company_address']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
           </div>
            <div class="gmap-outline">
                <div id="gmap_canvas2" class="google-map"></div>
            </div>
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->
        <script type='text/javascript'>

        //________ Contact form function by = custom.js________//
          jQuery(document).on('submit', 'form.cons-contact-form', function(e){
            e.preventDefault();
            var form = jQuery(this);
            /* sending message */
            jQuery.ajax({
              url: '<?=base_url().$lang_slug?>contact-us',
              data: form.serialize() + "&action=contactform",
              type: 'POST',
              dataType: 'JSON',
              beforeSend: function() {
                jQuery('.loading-area').show();
              },
              complete: function (xhr, status){
                console.log(status);
              },
              error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.statusText);
                    console.log(xhr.responseText);
                    console.log(xhr.status);
                    console.log(thrownError);
                },
              success:function(data){
                console.log(data);
                jQuery('.loading-area').hide();
                if(data['success']){
                jQuery("<div class='alert alert-success'>"+data['message']+"</div>").insertBefore('form.cons-contact-form');
                }else{
                jQuery("<div class='alert alert-danger'>"+data['message']+"</div>").insertBefore('form.cons-contact-form');
                }
              }
            });
            jQuery('.cons-contact-form').trigger("reset");
            return false;
          });
        </script>
