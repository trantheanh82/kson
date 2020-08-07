<div class="sidebar-box">
    <div class="service-menu">
        <ul>
          <?php
              foreach($items as $k=>$v):
                $link = base_url().$current_lang['slug'].'/'.$v->translation->model.'/'.$v->slug->slug;

          ?>
              <li<?=($item_slug==$v->slug->slug)?" class='active'":""?>>
                <a href="<?=$link?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?=$v->translation->content->name?></a></li>

                <?php
            endforeach;
              ?>
      </ul>
    </div>
</div>
