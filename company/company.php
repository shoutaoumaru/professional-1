<?php
 /* Template Name: company
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>事務所紹介｜士業テンプレート1</title>
<meta name="description"  content="">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/animation.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/parts.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
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

  <!-- mobile-menu -->
  <div class="openbtn d-lg-none"><span></span><span></span><span></span></div>
  <?php get_template_part('includes/c-header'); ?>     

  <!-- top_company -->
  <section id="thumbnail" class="position-relative">
    <img class="thumbnail-img" src="<?php echo get_template_directory_uri(); ?>/images/company/company.jpg" alt="">
    <div class="position-absolute text-center">
      <p>COMPANY</p>
      <h2 class="Typing">事務所紹介</h2>
    </div>
  </section>

  <div class="container my-5">
    <section class="company-contents p-lg-5 p-2">
      <h2 class="text-center my-5">当事務所について</h2>
      <div class="row align-items-center flex-md-row-reverse">
        <div class="scroll-top col-md-7 my-3 p-lg-5">
          <div class="my-5">
            <p class="p-2 mb-4">Riv司法書士事務所は、登記業務を中心に業務を行なっております。一言で登記と言っても不動産登記、商業登記、債権譲渡登記等多岐にわたり、専門性の高い知識とノウハウが必要になります。</p>
            <p class="p-2 mb-4">当事務所では開業以来、急激な時代の変化、複雑化する経済情勢に敏速に対応すべく複数司法書士執務制度を導入し、また、土地家屋調査士・税理士・弁護士等の各種専門分野の士業と連携しあってクライアントの皆様に恒久的に安定した法的サービスを受けていただける様、業務を遂行してまいりました。</p>
            <p class="p-2 mb-4">開業20周年を迎えた今、当事務所は現状に甘んじることなく日々進化を追い求めております。登記業務を1本の柱として、常に社会のニーズに適合した柔軟且つ盤石な事務所を目指して今後50年、100年と続く事務所でありたいと思っております。
            </p>
          </div>
          <div class="text-end px-3">
            <p class="description mb-1">代表 司法書士</p>
            <h3>利部 翔太</h3>
          </div>

        </div>
        <div class="scroll-top col-md-5 my-3">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/company/president.jpg" alt="">
        </div>
      </div>

    </section>

    <section class="scroll-top company-info p-md-5 py-5">
      <h2 class="text-center my-5">事務所の概要</h2>
      <dl>
        <dt>名称</dt>
        <dd>Riv司法書士事務所</dd>
        <dt>代表 司法書士</dt>
        <dd>利部 翔太</dd>
        <dt>所在地</dt>
        <dd>〒812-0011<span class="br-sp ms-3">福岡県福岡市博多区博多駅前3-27-25-9F</dd>
        <dt>TEL</dt>
        <dd>0120-123-456</dd>
        <dt>開業</dt>
        <dd>平成8年7月10日</dd>
        <dt>所員数</dt>
        <dd>所員数23名（令和3年9月現在）
          <span class="br">※派遣除く</span></dd>
      </dl>
    </section>

</div> 

<!-- footer -->
<?php get_template_part('includes/c-footer'); ?>      

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/typing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/scrollreveal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>

</body>
</html>