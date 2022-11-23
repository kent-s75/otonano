<?php get_header(); ?>
<div class="blog_container">
  <div class="blog_content">
      <main>
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <?php
          $cat = get_the_category();
          $catname = $cat[0]->cat_name;
          ?>
        <article class="blog_detail">
          <h1 class="blog_single_title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h1>
          <div class="blog_border"></div>
          <ul>
            <li class="blog_single_detail_date"><?php the_time('作成日 Y年n月j日'); ?></li>
            <!-- <?php the_modified_date('Y/m/d') ?> -->
            <!-- <li class="aaa"><?php echo $catname; ?></li> -->
          </ul>
          <!-- <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
        </a> -->
          <div class="article"><?php the_content(); ?>
          </div>
          <div class="page_next">
            <div class="previous_link">
              <?php previous_post_link('%link', '< 前の記事へ'); ?>
            </div>
            <div class="next_link">
              <?php next_post_link('%link', '次の記事へ >'); ?>
            </div>
          </div>
        </article>
        <?php endwhile;endif; ?>
      </main>
    </div>
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>