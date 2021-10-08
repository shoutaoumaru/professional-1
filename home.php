<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <title>士業テンプレート1</title>

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
        <li><a href=" <?php echo esc_url( home_url('/business')); ?>">取扱い業務</a></li>
        <li><a href=" <?php echo esc_url( home_url('/company')); ?>">事務所紹介</a></li>
        <li><a href=" <?php echo esc_url( home_url('/news')); ?>">ニュース</a></li>
        <li><a href=" <?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
      </ul>
    </nav>
  </header>
  <!-- top_main -->
  <section class="top_main">
    <div class="top-title">
      <h2 class="fw-normal">We aim to be your long-term patrner.</h2>
      <p class="Typing small">永きにわたるパートナーを目指して</p>
    </div>
    <div id="slider" class="scroll-main">
    </div>
    <div class="top_main_bottom d-flex position-absolute w-100 justify-content-between">

      <div class="p-md-4 p-2 d-flex border border-dark bg-dark">
        <p class="align-self-center"><i class="fas fa-phone fa-3x me-3"></i></p>
        <div class="align-self-center hours">
          <p class="fs-3 fw-bold">0120-123-456</p>
          <span class="br fw-light">月～金 09:00-17:00 (土日祝休み)</span>
        </div>
      </div>

      <div class="m-color">
        <p class="bg-dark d-inline-block py-1 px-3 fw-bold">NEWS</p>
        <ul class="slider p-md-4 p-3">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="p-3"><a href="<?php the_permalink() ;?>"><span
                class="mx-md-4 mx-2 fw-bold"><?php echo get_the_date(); ?></span><?php the_title(); ?></a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
    <div class="scrolldown"><span>Scroll</span></div>
  </section>

  <!-- top_company -->
  <section id="top_company" class="p-md-5 py-5">
    <div class="p-lg-5 p-3">
      <h2 class="Typing">Our Values</h2>
      <p class="description">- 私たちの価値</p>
      <div class="scroll-top my-4 p-3">

        <p class="mb-3">私たちはお客さまの未来や夢、あるいは問題にしっかりと向き合い、それらの実現や解決に導くベストパートナーであり続けます。</p>
        <p>総合的な士業サービスをワンストップでご提供できる人材とネットワーク、幅広い専門知識とノウハウで、お客さまの頼れる身近な法務相談役として問題を解決します。</p>
      </div>



      <a href=" <?php echo esc_url( home_url('/company')); ?>" class="stretchbtn my-lg-5 my-3"><span class="me-3">More</span></a>
    </div>
  </section>

  <!-- top_service -->
  <section id="top_business">
    <div class="container my-5 p-3">
      <h2 class="Typing">Services</h2>
      <p class="description">- 取扱い業務</p>
      <p class="scroll-top">Riv司法書士事務所は高い専門知識とサポート力で、<span class="br">ご満足頂けるサービスをお約束します。</span></p>
    </div>

    <ul id="gallery" class="row gallery my-5">
      <li class="col-lg-3 col-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/business/business.html">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-1.jpg" alt="">
          </a>
          <p class="position-absolute">不動産登記</p>
        </div>
      </li>
      <li class="col-lg-3 col-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/business/business.html">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-2.jpg" alt="">
          </a>
          <p class="position-absolute">商業登記</p>
        </div>
      </li>
      <li class="col-lg-3 col-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/business/business.html">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-3.jpg" alt="">
          </a>
          <p class="position-absolute">相続</p>
        </div>
      </li>
      <li class="col-lg-3 col-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/business/business.html">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-4.jpg" alt="">
          </a>
          <p class="position-absolute">贈与</p>
        </div>
      </li>
      <li class="col-lg-3 col-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/business/business.html">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-5.jpg" alt="">
          </a>
          <p class="position-absolute">債権譲渡登記</p>
        </div>
      </li>
      <li class="col-lg-3 col-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/business/business.html">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-6.jpg" alt="">
          </a>
          <p class="position-absolute">信託登記</p>
        </div>
      </li>
      <li class="col-lg-3 col-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/business/business.html">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-7.jpg" alt="">
          </a>
          <p class="position-absolute">契約書作成</p>
        </div>
      </li>
      <li class="col-lg-3 col-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/business/business.html">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-8.jpg" alt="">
          </a>
          <p class="position-absolute">その他の法務</p>
        </div>
      </li>
    </ul>

    <div class="container">
      <a href=" <?php echo esc_url( home_url('/business')); ?>" class="stretchbtn mb-5"><span class="me-3">More</span></a>
    </div>
  </section>

  <section id="top_news">
    <div class="row">

      <div class="bgextend bgLRextendTrigger col-lg-5 m-color">
        <div class="d-flex flex-column bgappearTrigger p-md-5 p-4">
          <h2 class="Typing">NEWS</h2>
          <p class="description">- ニュース</p>
          <div class="mt-auto p-2 mb-4">
            <a href=" <?php echo esc_url( home_url('/news')); ?>" class="stretchbtn"><span class="me-3">More</span></a>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <ul class="p-md-5">
          <?php query_posts('posts_per_page=3'); ?>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="p-md-5 p-4 border-bottom border-white">
              <a href="<?php the_permalink() ;?>">
                <span class="m-color text-white px-md-5 p-md-4 p-2 me-4"><?php echo get_the_date(); ?></span><?php the_title(); ?>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="d-md-none my-5 text-center">
          <a href=" <?php echo esc_url( home_url('/news')); ?>" class="stretchbtn"><span class="me-3">More</span></a>
        </div>
      </div>
    </div>
  </section>

  <section id="top_recruit" class="position-relative">
    <div class="d-md-flex flex-md-row-reverse py-md-5 py-4">
      <div class="d-flex align-items-end flex-column mb-3 container p-lg-5 p-3">
        <h2 class="Typing mb-0">RECRUIT</h2>
        <p class="description p-2">- 採用情報</p>
        <div class="scroll-top px-2 py-4">
          <p class="mb-4">「人を育て、人を活かす。」そんな環境で私たちと一緒に歩んでみませんか。</p>
          <p>司法書士有資格者はもちろんのこと、未経験の方、これから資格取得を目指す方も歓迎いたします。</p>
        </div>
        <div class="mt-auto p-2">
          <a href=" <?php echo esc_url( home_url('/recruit')); ?>" class="stretchbtn "><span class="me-3">More</span></a>
        </div>
      </div>
      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/top/recruit.jpg" alt="">
    </div>
  </section>

  <!-- footer -->
  <?php get_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/typing.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/scrollreveal.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/bxslider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vegas.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>

</html>