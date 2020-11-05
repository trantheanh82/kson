<!-- Categories  -->
<?php if(!empty($categories)):?>
<div class="widget widget_services ">
       <h4 class="widget-title"><?=lang('Categories')?></h4>
       <ul class="p-a10 bg-white">
          <!--<li><a href="javascript:void(0);">Home<span> (38)</span></a></li>-->
         <?php foreach($categories as $k=>$v):
                $link = site_url(lang('category').'-'.$v->slug);
           ?>
                <li><?=anchor($link,$v->name,array('title'=>$v->name))?></li>
        <?php endforeach; ?>
       </ul>
   </div>
<?php endif;?>
