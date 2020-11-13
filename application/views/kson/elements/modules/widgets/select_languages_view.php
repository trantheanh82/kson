<?php if(isset($langs) && count($langs)>1): ?>
<li style="padding-left:10px;">
  <?php foreach($langs as $k=>$v):?>
    <?=anchor(base_url().$v->slug.'/'.lang('home'),img('/assets/img/flags/'.$v->image)." <span>".lang($v->language_name)."</span>")?>
        </li>
<?php
          endforeach;
      endif;?>
