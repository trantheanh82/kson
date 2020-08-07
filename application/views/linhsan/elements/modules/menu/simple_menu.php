<ul class="rt-dropdown-menu">
    <?php

      foreach($items as $k=>$v):
    ?>
    <li><?=anchor((isset($v->model)?$v->model:$v->translation->model).'/'.$v->slug->slug,$v->translation->content->name)?>
    <?php
      endforeach;
    ?>
</ul>
