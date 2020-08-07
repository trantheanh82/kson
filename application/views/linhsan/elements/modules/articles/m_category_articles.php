<?=$this->load->view($template.'/elements/sidebar_box/header_box',array('title'=>lang('Categories')))?>
        <ul>
          <?php foreach($categories as $k=>$v):
                $link = base_url().$current_lang['slug'].'/'.$v->model.'/'.$v->slug->slug;
          ?>
          <li><?=anchor($link,'<i class="fa fa-angle-right" aria-hidden="true"></i>'.$v->translation->content->name)?></li>
<?php endforeach;?>
        </ul>
<?=$this->load->view($template.'/elements/sidebar_box/footer_box')?>
