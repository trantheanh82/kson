<!-- RECENT POSTS -->
<div class="widget  recent-posts-entry">
    <h4 class="widget-title"><?=lang('Recent Posts')?></h4>
    <div class="section-content p-a10 bg-white">
        <div class="widget-post-bx">
            <?php foreach($recent_posts as $k=>$v):
                  $link = lang('detail').'-'.$v->slug;
            ?>
            <div class="widget-post clearfix">
                <?php if(!empty($v->image)):
                      $v->image = str_replace('upload','thumbs',$v->image);
                  ?>
                <div class="sx-post-media">
                    <?=anchor($link,img($v->image,'',array('alt'=>$v->name)))?>
                </div>
              <?php endif;?>
                <div class="sx-post-info">

                    <div class="sx-post-header">
                        <h6 class="post-title"><?=anchor($link,getSnippet($v->name,14))?></h6>
                    </div>
                    <div class="sx-post-meta">
                        <ul>
                            <li class="post-author"><?=date_format(date_create($v->created_at),'d/m/Y')?></li>
                        </ul>
                    </div>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
</div>
