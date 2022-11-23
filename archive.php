<?php get_header(); ?>
<div class="blog_container">
  <div class="blog_content">
    <div class="category_title_wrapper">
      <h1 class="blog_title">
        ブログ
        <!-- 一覧 -->
        <?php if (have_posts()){while(have_posts()){the_post(); ?>
        <?php }} ?>
      </h1>
    </div>
    <div class=" blog_border"></div>
      <div class="blog_detail">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <article class="blog_detail_content">
          <div>
            <h2 class="blog_detail_title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
            <div class="blog_title_detail">
              <?php
            if (mb_strlen(strip_tags(get_the_content()), 'UTF-8') > 59) {
              $content = mb_substr(strip_tags(get_the_content()), 0, 59, 'UTF-8');
              echo $content . '…';
            } else {
              echo strip_tags(get_the_content());
            }
            ?>
              <p class="blog_detail_date"><?php echo get_the_date('Y年m月d日'); ?></p>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
        <div class="blog_pagenation">
          <?php get_template_part( 'template-parts/parts', 'pagination' ); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>