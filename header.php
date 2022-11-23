<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>OTONA DESIGN</title>
  <meta name="description" content="shimao">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header_inner">
      <div class="header_logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img class="header_logo-image" src="<?php echo get_template_directory_uri(); ?>/assets/header_logo.svg"
            alt="ヘッダーロゴ" />
        </a>
      </div>
      <div id="sp_head">
        <div class="openbtn" id="nav-toggle"><span></span><span></span></div>
      </div>
      <nav class="navbar" id="g-nav">
        <ul class="navbar_inner">
          <a class="navbar_btn" href="<?php echo esc_url(home_url('#team')); ?>">
            <li class="navbar_btn_link" id="menu">
              WORK
            </li>
          </a>
          <a class="navbar_btn" href="<?php echo esc_url(home_url('#blog')); ?>">
            <li class="navbar_btn_link" id="menu1">
              BLOG
            </li>
          </a>
          <a class="navbar_btn" href="<?php echo esc_url(home_url('#contact')); ?>">
            <li class="navbar_btn_link" id="menu2">
              CONTACT
            </li>
          </a>
        </ul>
      <a>
        <img class="post" src="<?php echo get_template_directory_uri(); ?>/assets/post.svg">
      </a>
      </nav>
      <a class="cta" href="<?php echo home_url('about'); ?>"><img class="namecard01" src="<?php echo get_template_directory_uri(); ?>/assets/namecard01.svg"></a>
    </div>
  </header>