<?php
/*
Template Name: Главная
*/

get_header();
?>

  
<div id="carousel-example-generic slider0" class="carousel slide slide0" data-ride="carousel">
  <!-- Indicators -->
 <!-- <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">


  <?php if( have_rows('slider') ): ?>

  

  <?php while( have_rows('slider') ): the_row(); 

    // vars
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $desc = get_sub_field('desc');
    $link = get_sub_field('link');
    $active = get_sub_field('active');

    ?>

    
    <div class="item <?php echo $active; ?>">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
      <div class="carousel-caption">
      <h3><?php echo $title; ?></h3>
      <p><?php echo $desc; ?></p>
      <div class="readmore">
      <?php if( $link ): ?>
        <a href="<?php echo $link['url']; ?>">
      <?php endif; ?>
      подробнее</a>
      
      </div>
    </div>
    </div>
  
  <?php endwhile; ?>

  

<?php endif; ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="onas">
  <div class="container">
      <div class="row">
          <h2><?php the_field('about_title'); ?></h2>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <?php

$image1 = get_field('about_image');

if( !empty($image1) ): ?>

  <img class="img-responsive" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

<?php endif; ?>
             
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <p>
                 <?php the_field('about_text'); ?>
              </p>
              <div class="readmore">

<?php 

$link1 = get_field('about_link');

if( $link1 ): 
  $link_url = $link['url'];
  ?>

  <a href="<?php echo esc_url($link_url); ?>">подробнее  <i class="fas fa-long-arrow-alt-right"></i></a>
<?php endif; ?>


                </div>
          </div>
      </div>
  </div>
</div>


<div class="container">
    <div class="row service">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2><?php the_field('uslugi_title'); ?></h2>
            <div class="desc"><?php the_field('uslugi_desc'); ?></div>
        </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1`"></li>

      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" >
  <?php if( have_rows('uslugi') ): ?>       
   <?php while( have_rows('uslugi') ): the_row(); 

    // vars
    $active = get_sub_field('active');
    $image1 = get_sub_field('image1');
    $title1 = get_sub_field('title1');
    $desc1 = get_sub_field('desc1');
    $link1 = get_sub_field('link1');
    $image2 = get_sub_field('image2');
    $title2 = get_sub_field('title2');
    $desc2 = get_sub_field('desc2');
    $link2 = get_sub_field('link2');
    $image3 = get_sub_field('image3');
    $title3 = get_sub_field('title3');
    $desc3 = get_sub_field('desc3');
    $link3 = get_sub_field('link3');
    $image4 = get_sub_field('image4');
    $title4 = get_sub_field('title4');
    $desc4 = get_sub_field('desc4');
    $link4 = get_sub_field('link4');
    $image5 = get_sub_field('image5');
    $title5 = get_sub_field('title5');
    $desc5 = get_sub_field('desc5');
    $link5 = get_sub_field('link5');
    $image6 = get_sub_field('image6');
    $title6 = get_sub_field('title6');
    $desc6 = get_sub_field('desc6');
    $link6 = get_sub_field('link6');
    ?>    
          <div class="item <?php echo $active; ?>">



          
              <div class="col-xs-4 service1">
                  <div class="img"><img src="<?php echo $image1['url']; ?>"></div>
                  <h3><?php echo $title1; ?></h3>
                  <p><?php echo $desc1; ?></p>
                <div class="readmore">
                  <?php if( $link1 ): ?>
                  <a href="<?php echo $link1['url']; ?>">подробнее  <i class="fas fa-long-arrow-alt-right"></i></a>
                  <?php endif; ?>
                </div>
              </div>

                            <div class="col-xs-4 service1">
                  <div class="img"><img src="<?php echo $image2['url']; ?>"></div>
                  <h3><?php echo $title2; ?></h3>
                  <p><?php echo $desc2; ?></p>
                <div class="readmore">
                  <?php if( $link2 ): ?>
                  <a href="<?php echo $link2['url']; ?>">подробнее  <i class="fas fa-long-arrow-alt-right"></i></a>
                  <?php endif; ?>
                </div>
              </div>


                            <div class="col-xs-4 service1">
                  <div class="img"><img src="<?php echo $image3['url']; ?>"></div>
                  <h3><?php echo $title3; ?></h3>
                  <p><?php echo $desc3; ?></p>
                <div class="readmore">
                  <?php if( $link3 ): ?>
                  <a href="<?php echo $link3['url']; ?>">подробнее  <i class="fas fa-long-arrow-alt-right"></i></a>
                  <?php endif; ?>
                </div>
              </div>


                            <div class="col-xs-4 service1">
                  <div class="img"><img src="<?php echo $image4['url']; ?>"></div>
                  <h3><?php echo $title4; ?></h3>
                  <p><?php echo $desc4; ?></p>
                <div class="readmore">
                  <?php if( $link4 ): ?>
                  <a href="<?php echo $link4['url']; ?>">подробнее  <i class="fas fa-long-arrow-alt-right"></i></a>
                  <?php endif; ?>
                </div>
              </div>


                            <div class="col-xs-4 service1">
                  <div class="img"><img src="<?php echo $image5['url']; ?>"></div>
                  <h3><?php echo $title5; ?></h3>
                  <p><?php echo $desc5; ?></p>
                <div class="readmore">
                  <?php if( $link5 ): ?>
                  <a href="<?php echo $link5['url']; ?>">подробнее  <i class="fas fa-long-arrow-alt-right"></i></a>
                  <?php endif; ?>
                </div>
              </div>


                            <div class="col-xs-4 service1">
                  <div class="img"><img src="<?php echo $image6['url']; ?>"></div>
                  <h3><?php echo $title6; ?></h3>
                  <p><?php echo $desc6; ?></p>
                <div class="readmore">
                  <?php if( $link6 ): ?>
                  <a href="<?php echo $link6['url']; ?>">подробнее  <i class="fas fa-long-arrow-alt-right"></i></a>
                  <?php endif; ?>
                </div>
              </div>
    


          </div> 

  <?php endwhile; ?>
<?php endif; ?>          
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
</div>
</div>


  <div class="rev">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h2>Отзывы</h2>
              </div>
              <div id="myCarouse4" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                      <li data-target="#myCarouse4" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarouse4" data-slide-to="1`"></li>
                      <li data-target="#myCarouse4" data-slide-to="2`"></li>
                      <li data-target="#myCarouse4" data-slide-to="3`"></li>
                      <li data-target="#myCarouse4" data-slide-to="4`"></li>
                      <li data-target="#myCarouse4" data-slide-to="5`"></li>
                      <li data-target="#myCarouse4" data-slide-to="6`"></li>
                      <li data-target="#myCarouse4" data-slide-to="7`"></li>

                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" >

<?php if( have_rows('reviews') ): ?>       
   <?php while( have_rows('reviews') ): the_row(); 

    // vars
    $active = get_sub_field('active');
    $photo = get_sub_field('photo');
    $desc = get_sub_field('desc');
    $fio = get_sub_field('fio');
    ?>    


                      <div class="item <?php echo $active; ?>">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 rev1">
                              <div class="img"><img src="<?php echo $photo['url']; ?>"></div>
                              <p><?php echo $desc; ?></p>
                              <i class="fas fa-quote-left"></i>
                              <h3><?php echo $fio; ?></h3>
                          </div>


                      </div>

  <?php endwhile; ?> 
<?php endif; ?>


                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#myCarouse4" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouse4" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
          </div>
      </div>
  </div>

  <div class="news">
  <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2>Новости</h2>
          </div>
         
<?php if ( have_posts() ) : query_posts('showposts=3&cat=3');  

while (have_posts()) : the_post();   ?> 

          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="img">
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }?>
              </div>
              <div class="n1">
                  <div class="date"><i class="fas fa-calendar-alt"></i> <?php the_date(); ?>
</div>
                  <h3><?php trim_title_chars(25, '...'); ?></h3>
                  <div class="desc"><?php echo content(8);?></div>
                  <div class="readmore"><a href="<?php the_permalink(); ?>">подробнее  <i class="fas fa-long-arrow-alt-right"></i></a></div>
              </div>
          </div> 

<?php 
endwhile;
endif;  
wp_reset_query();
?>



          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="pokazat1"><a href="/category/novosti/">Показать еще...</a></div>
          </div>
      </div>
  </div>
  </div>
  </div>

  <div class="video">
      <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2>Видео галерея</h2>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
              <img src="wp-content/themes/accmedical/img/v1.jpg">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
              <img src="wp-content/themes/accmedical/img/v2.jpg">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
              <img src="wp-content/themes/accmedical/img/v3.jpg">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
              <img src="wp-content/themes/accmedical/img/v4.jpg">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
              <img src="wp-content/themes/accmedical/img/v5.jpg">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
              <img src="wp-content/themes/accmedical/img/v6.jpg">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="pokazat1"><a href="/видео/">Показать еще...</a></div>
          </div>
      </div>
      </div>
  </div>


  <div class="photo">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h2>ФОТОГАЛЕРЕЯ</h2>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
                  <img src="wp-content/themes/accmedical/img/p1.jpg">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
                  <img src="wp-content/themes/accmedical/img/p2.jpg">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
                  <img src="wp-content/themes/accmedical/img/p3.jpg">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
                  <img src="wp-content/themes/accmedical/img/p4.jpg">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
                  <img src="wp-content/themes/accmedical/img/p5.jpg">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 v1">
                  <img src="wp-content/themes/accmedical/img/p6.jpg">
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="pokazat1"><a href="/фотогалерея/">Показать еще...</a></div>
              </div>
          </div>
      </div>
  </div>

  <div style="display: none;" class="subscribe">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h2>рассылка</h2>
                  <div class="desc">подпишитесь на рассылка для получения новостей об акциях  и скидках</div>
                  <form class="subscribeinput">

                  </form>
              </div>
          </div>
      </div>
  </div>
  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2aceec9bfd68b742f958354047f83d2abb6acab69a3ca8ced7abb0d0a3a2c6a7&amp;width=100%25&amp;height=538&amp;lang=ru_RU&amp;scroll=true"></script>

<?php get_footer();?>
