<?php
 $this->load->view($template.'/elements/modules/page_inner_title');
 ?>
   <!-- Contact Start Here -->
   <div class="contact-area">
       <div class="container">
           <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <div class="contact-info">
                       <h2><?=lang("Information")?></h2>
                       <p><?=$item->translation->content->content?></p>
                       <ul>
                           <li>
                             <i class="fa fa-map-marker" aria-hidden="true"></i>
                             <?=$Settings['address']?></li>
                           <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                           <?=$Settings['company_email']?></li>
                           <li><i class="fa fa-phone" aria-hidden="true"></i>
                             <?=$Settings['company_phone_1']?></li>
                           <li><i class="fa fa-fax" aria-hidden="true"></i>
                             <?=$Settings['company_phone_2']?></li>
                       </ul>
                   </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <form id="contact-form" class="contact-form" action="<?=base_url().$current_lang['slug'].'/page/'.uri_string()?>">
                       <h2><?=lang("Send Message")?></h2>
                       <fieldset>
                           <div class="form-group">
                               <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                               <div class="help-block with-errors"></div>
                           </div>
                           <div class="form-group">
                               <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                               <div class="help-block with-errors"></div>
                           </div>
                           <div class="form-group">
                               <input type="text" placeholder="Phone*" class="form-control" name="phone" id="form-phone" data-error="Phone field is required" required>
                               <div class="help-block with-errors"></div>
                           </div>
                           <div class="form-group">
                               <input type="text" placeholder="Subject*" class="form-control" name="subject" id="form-subject" data-error="Subject field is required" required>
                               <div class="help-block with-errors"></div>
                           </div>
                           <div class="form-group">
                               <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message field is required" required></textarea>
                               <div class="help-block with-errors"></div>
                           </div>
                           <div class="form-group margin-bottom-none">
                               <button type="submit" class="btn-default-black"><?=lang('Send')?></button>
                           </div>
                           <div class='form-response'></div>
                       </fieldset>
                   </form>
               </div>
           </div>
       </div>
   </div>
   <!-- Contact End Here -->
   <!-- Google Map Start Here -->
   <div class="google-map-area">
       <div id="googleMap" style="height: 480px; width: 100%;"></div>
   </div>
   <!-- Google Map End Here -->
