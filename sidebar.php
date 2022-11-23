<aside id="sidebar">
  <form method="get" id="blogSearch" action="<?php echo home_url('/'); ?>">
    <label class="scrText" for="blogSearchInput">検索したいキーワードを入力してください</label>
    <input type="text" name="s" id="blogSearchInput" value="<?php the_search_query(); ?>"
      placeholder=" キーワードを入力してください" />
    <input type="hidden" name="post_type" value="blog">
    <input class="sidebar_search_button" type="submit" value="検索" accesskey="f" />
  </form>
  <section class="archive_sidebar">
    <p class="sidebar_title">最近の投稿</p>
    <ul>
      <?php
      $args = array(
      'posts_per_page' => 5 // 表示件数
      );
      $posts = get_posts( $args );
      foreach ( $posts as $post ): // ループの開始
      setup_postdata( $post ); // 記事データの取得
      ?>
      <div class="sidebar_border">
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
      </div>
      <?php
      endforeach; // ループの終了
      ?>
    </ul>
    <div class="archive_dropdown_wrapper">
      <p class="sidebar_title">アーカイブ</p>
      <select class="archive_dropdown" name="archive-dropdown"
        onChange='document.location.href=this.options[this.selectedIndex].value;'>
        <option value=""><?php echo attribute_escape(__('月を検索▼')); ?></option>
        <?php wp_get_archives (array(
          'type' => 'monthly',
          'format' => 'option',
          'show_post_count' => '1'
        ));
        ?>
      </select>
    </div>
    <p class="sidebar_title">カテゴリー</p>
    <div class="sidebar_category_wrapper">
      <ul>
        <?php
          // 親カテゴリーのものだけを一覧で取得
          $args = array(
            'parent' => 0,
            'orderby' => 'term_order',
            'order' => 'ASC'
          );
          $categories = get_categories( $args );
        ?>

        <?php foreach( $categories as $category ) : ?>
        <li>
          <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
</aside>