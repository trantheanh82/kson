<!-- left side social bar-->
 <div class="slide-left-social">
     <ul class="clearfix">
       <?php if(!empty($Settings['social_linkedin'])):?>
         <li><a href="<?=$Settings['social_linkedin']?>" class="sx-title-swip" data-hover="Linkedin">Linkedin</a></li>
       <?php endif;?>
       <?php if(!empty($Settings['social_twitter'])):?>
         <li><a href="<?=$Settings['social_twitter']?>" class="sx-title-swip" data-hover="Twitter">Twitter</a></li>
       <?php endif;?>
       <?php if(!empty($Settings['social_facebook'])):?>
         <li><a href="<?=$Settings['social_facebook']?>" class="sx-title-swip" data-hover="Facebook">Facebook</a></li>
       <?php endif;?>
       <?php if(!empty($Settings['social_instagram'])):?>
         <li><a href="<?=$Settings['social_instagram']?>" class="sx-title-swip" data-hover="Instagram">Instagram</a></li>
       <?php endif;?>
     </ul>
 </div>
