<?=$this->load->view($template.'/elements/sidebar_box/header_box',array('title'=>'Pages'))?>
        <ul>
          <?php
              foreach($items as $k=>$v):
                $link = base_url().$current_lang['slug'].'/page/'.$v->slug->slug;
          ?>
          <li>
            <?=anchor($link,'<i class="fa fa-angle-right" aria-hidden="true"></i>'.$v->translation->content->name)?></li>

          <?php endforeach;?>
        </ul>
<?=$this->load->view($template.'/elements/sidebar_box/footer_box')?>
