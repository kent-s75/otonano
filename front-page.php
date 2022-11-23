<?php get_header(); ?>
<div class="container">
  <section>
    <figure class="front_hero_img">
    <h1 class="front_top_title"><img class="scroll_img" src="<?php echo get_template_directory_uri(); ?>/assets/h1.svg" alt="おとなのデザイン。"></h1>
      <div class="front_top_wrapper">
        <div class="front_top_left">
          <p>“おとな”ってなんだろう。<br>
          18歳になったら？<br>それともビールが飲めたら？<br>
          もしかして<span class="bold">“信頼”</span>するための<br>合言葉だったりして。<br>
          一緒に信頼が置けるデザインを考えていきませんか。</p>
          <a class="btn" href="<?php echo home_url('about'); ?>">MORE</a>
        </div>
        <div class="front_top_bag">
          <div class="front_top_bag_wrapper">
            <div class="front_top_bag_title">
              <h2><img class="scroll_img" src="<?php echo get_template_directory_uri(); ?>/assets/pocketbook.svg"></h2>
              <p>はじめからおわりまでノウハウをまとめました。</p>
            </div>
            <div class="listbtn">
              <ul class="string">
                <li>
                  <a href=“#“>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/ic01.svg">
                  <p class="bold">はじめ</p>
                  <ul>
                    <li>
                      見積書
                    </li>
                    <li>
                      ワークフロー作成
                    </li>
                    <li>
                      プレゼン
                    </li>
                  </ul>
                  </a>
                </li>
                <li>
                  <a href=“#“>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ic02.svg">
                    <p class="bold">なかば</p>
                    <ul>
                      <li class="bold">
                        デザイン作成
                      </li>
                      <li>
                        ミーティング
                      </li>
                      <li>
                        ブレスト
                      </li>
                    </ul>
                  </a>
                </li>
                <li>
                  <a href=“#“>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ic03.svg">
                    <p class="bold">おわり</p>
                    <ul>
                      <li>
                        テスト集計
                      </li>
                      <li>
                        ポートフォリオ
                      </li>
                      <li>
                        赤入れ
                      </li>
                    </ul>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </figure>
    <div class="scrolldown2"></div>
  </section>
  <section class="scroll_section" id="team">
    <div class="front_title">
      WORK
    </div>
    <ul class="scroll_content">
      <li class="scroll_inner">
        <img class="scroll_img" src="<?php echo get_template_directory_uri(); ?>/assets/01.svg"></a>
      </li>
      <li class="scroll_inner">
        <img class="scroll_img" src="<?php echo get_template_directory_uri(); ?>/assets/03.png"></a>
      </li>
      <li class="scroll_inner">
        <img class="scroll_img" src="<?php echo get_template_directory_uri(); ?>/assets/04.jpg"></a>
      </li>
      <li class="scroll_inner">
        <img class="scroll_img" src="<?php echo get_template_directory_uri(); ?>/assets/05.gif"></a>
      </li>
  </section>
  <!-- <section class="service_section" id="service">
  </section> -->
  <section class="blog_scroll_section" id="blog">
    <div class="front_title">
      <a class="navbar_btn_link" href="<?php echo esc_url(home_url('blog')); ?>">
        <h5 class="title_description">BLOG</h5>
      </a>
    </div>
    <ul class="blog_scroll_wrapper">
      <li class="blog_scroll_content">
        <?php if(have_posts()): while (have_posts()):the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="blog_scroll_inner">
          <?php if (has_post_thumbnail()) : ?>
          <img class="blog_scroll_img" src="<?php echo the_post_thumbnail_url(''); ?>" alt="">
          <?php endif; ?>
          <div class="blog_scroll_description">
            <div class="blog_scroll_description_inner">
              <div class="blog_scroll_date"><?php the_time('Y.n.j'); ?></div>
              <div class="blog_scroll_cate"><?php
            $category = get_the_category(); 
            echo $category[0]->cat_name;
            ?></div>
            </div>
            <h4 class="blog_scroll_name"><?php the_title(); ?></h4>
            <h5 class="blog_scroll_position_name">
              <?php the_excerpt(); ?>
            </h5>
          </div>
        </a>
        <?php endwhile; endif; ?>
      </li>
    </ul>
  </section>
  <section></section>
  <section class="contact_section" id="contact">
    <h2 class="title_bottom_text">CONTACT</h2>
    <?php echo apply_shortcodes( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
  </section>
<?php get_footer(); ?>