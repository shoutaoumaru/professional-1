<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ニュース｜士業テンプレート1</title>
</head>
<body>

  <!-- header -->
  <header id="header" class="d-flex">
    <h2>
      <a href=" <?php echo esc_url( home_url('/')); ?>">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
      </a>
    </h2>
    <nav id="pc-nav">
      <ul id="g-navi" class="nav01c">
        <li><a href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
        <li><a href="/ <?php echo esc_url( home_url('/business')); ?>">取扱い業務</a></li>
        <li><a href=" <?php echo esc_url( home_url('/company')); ?>">事務所紹介</a></li>
        <li><a href=" <?php echo esc_url( home_url('/news')); ?>">ニュース</a></li>
        <li><a href=" <?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
      </ul>
    </nav>
  </header>
  <!-- top_company -->
  <section id="thumbnail" class="position-relative">
    <img class="thumbnail-img" src="<?php echo get_template_directory_uri(); ?>/images/news/news.jpg" alt="">
    <div class="position-absolute text-center">
      <p>NEWS</p>
      <h2 class="Typing"></h2>
    </div>
  </section>
  
  <section class="news-contents">
    <ul class="news-list">
      <li class="news-item pt-4">
        <a href="" class="p-xl-5 p-md-3 d-md-flex align-items-center">
          <span class="d-inline-block mb-3 m-color text-white px-md-4 p-2 me-md-5"><?php echo get_the_date(); ?></span>
          <p class="fs-md-12 mb-3 px-3"><?php the_title(); ?></p>
        </a>
      </li>
    </ul>
    <div class="my-5 text-center">
      <a href=" <?php echo esc_url( home_url('/')); ?>" class="stretchbtn"><span class="me-3">一覧に戻る</span></a>
    </div>
    <a href="#top" class="page_top"></a>
  </section>
  <?php get_footer(); ?>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/typing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>

</body>
</html>