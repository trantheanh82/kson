<?php if(!empty($service_categories)):?>
<div class="widget widget_services">
    <h4 class="widget-title"><?=lang("More Services")?></h4>
    <ul class="bg-white">
        <?php foreach($service_categories as $k=>$v):
              $link = lang('service').'-'.$v->slug
          ?>
        <li><?=anchor($link,$v->name)?></li>
      <?php endforeach;?>
    </ul>
</div>
<?php endif;?>
