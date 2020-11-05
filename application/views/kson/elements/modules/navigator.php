<!-- MAIN NAVIGATION -->
  <div class="header-nav nav-dark navbar-collapse collapse justify-content-start collapse">
      <ul class=" nav navbar-nav">
        <?php
          foreach($main_menu as $k=>$v):
              $link = $v->slug->slug;
        ?>
        <li>
            <?=anchor($link,$v->translation->content->name)?>
        </li>
        <?php
        endforeach;
         ?>
         <!--
          <li class="active">
              <a href="javascript:;">Home</a>
               <ul class="sub-menu">
                  <li><a href="index.html">Home-1</a></li>
                  <li><a href="index-2.html">Home-2</a></li>
                  <li><a href="index-3.html">Home-3</a></li>
                  <li><a href="index-4.html">Home-4</a></li>
                  <li><a href="index-5.html">Home-5</a></li>
                  <li><a href="index-6.html">Home-6</a></li>
              </ul>
          </li>

          <li>
              <a href="javascript:;">About us</a>
              <ul class="sub-menu">
                  <li><a href="about-1.html">About-1</a></li>
                  <li><a href="about-2.html">About-2</a></li>
              </ul>
          </li>

          <li>
              <a href="javascript:;">Pages</a>
              <ul class="sub-menu">
                  <li>
                      <a href="javascript:;">Services</a>
                      <ul class="sub-menu">
                          <li><a href="services-1.html">Services-1</a></li>
                          <li><a href="services-2.html">Services-2</a></li>
                          <li><a href="services-detail.html">Service Detail</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript:;">Team</a>
                      <ul class="sub-menu">
                          <li><a href="team.html">Our Team-1</a></li>
                          <li><a href="team-2.html">Our Team-2</a></li>
                          <li><a href="team-single.html">Team Detail</a></li>
                      </ul>
                  </li>
                  <li><a href="our-history.html">Our History</a></li>
                  <li><a href="icon-font.html">Fonts Icons </a></li>
                  <li><a href="error-404.html">Error 404</a></li>

              </ul>
          </li>

          <li>
              <a href="javascript:;">Projects</a>
              <ul class="sub-menu">
                  <li><a href="javascript:;">Project Grid Type</a>
                      <ul class="sub-menu">
                          <li><a href="project-grid-3-columns.html">3 Columns</a></li>
                          <li><a href="project-grid-3-columns-no-gap.html">3 Columns No Gutter</a></li>
                          <li><a href="project-grid-4-columns.html">4 Columns</a></li>
                          <li><a href="project-grid-4-columns-no-gap.html">4 Columns No Gutter</a></li>
                          <li><a href="project-grid-5-columns.html">5 Columns</a></li>
                          <li><a href="project-grid-5-columns-no-gap.html">5 Columns No Gutter</a></li>
                      </ul>
                  </li>
                  <li><a href="javascript:;">Project Masonry Type</a>
                      <ul class="sub-menu">
                          <li><a href="project-masonry-3-columns.html">3 Columns</a></li>
                          <li><a href="project-masonry-3-columns-no-gap.html">3 Columns No Gutter</a></li>
                          <li><a href="project-masonry-4-columns.html">4 Columns</a></li>
                          <li><a href="project-masonry-4-columns-no-gap.html">4 Columns No Gutter</a></li>
                          <li><a href="project-masonry-5-columns.html">5 Columns</a></li>
                          <li><a href="project-masonry-5-columns-no-gap.html">5 Columns No Gutter</a></li>
                      </ul>
                  </li>
                  <li><a href="project-carousel.html">Project Carousel</a></li>
                  <li><a href="javascript:;">Project Detail</a>
                          <ul class="sub-menu">
                              <li><a href="project-detail.html">Project Detail-1</a></li>
                              <li><a href="project-detail2.html">Project Detail-2</a></li>
                          </ul>
                  </li>
              </ul>
          </li>

          <li>
              <a href="javascript:;">Blog</a>
              <ul class="sub-menu">
                  <li><a href="blog-grid.html">Blog Grid</a></li>
                  <li><a href="blog-listing.html">Blog Listing</a></li>
                  <li><a href="blog-masonry.html">Blog Masonry</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                  <li><a href="post-right-sidebar.html">Post Right Sidebar</a></li>
              </ul>
          </li>

          <li><a href="faq.html">FAQ</a></li>
          <li><a href="contact-1.html">Contact us</a></li>-->

      </ul>
  </div>
