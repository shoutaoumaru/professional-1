<?php
 /* Template Name: recruit
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>採用情報｜士業テンプレート1</title>
<?php get_header(); ?>

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
  <!-- top_company -->
  <section id="thumbnail" class="position-relative">
    <img class="thumbnail-img" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit.jpg" alt="">
    <div class="position-absolute text-center">
      <p>RECRUIT</p>
      <h2 class="Typing">採用情報</h2>
    </div>
  </section>

  <div class="container my-5">

    <section class="recruit-contents p-2">
      <div class="my-5">
      <p class="fs-md-12 text-center">司法書士有資格者はもちろんのこと、未経験の方、これから資格取得を目指す方も歓迎いたします。
        <span class="br">当事務所を通じて是非司法書士としてのステップを踏み出してみませんか。</span></p>
      </div>
      <div class="my-5 p-lg-5 p-3">
        <div class="row">
          <div class="col-lg-4 my-4">
            <h3 class="Typing">1.経験の有無問わず歓迎します。</h3>
            <div class="scroll-top">
              <p class="mb-3">Riv司法書士事務所は、司法書士有資格者、業務経験のある方、資格取得中の方すべて歓迎しております。</p>
              <p>経験の有無は心配せず、少しでもご興味のある方はお気軽にご応募ください。</p>
            </div>
          </div>
          <div class="col-lg-4 my-4">
            <h3 class="Typing">2.勤務形態を選べます。</h3>
            <div class="scroll-top">
              <p class="mb-3">Riv司法書士事務所は、様々な勤務形態をとることができます。</p>
              <p>ご家庭の事情や体調面などで、残業ができない、勤務形態を変えたいなど、個々の状況に対応いたしますので、面接時にご相談ください。</p>
            </div>
          </div>
          <div class="col-lg-4 my-4">
            <h3 class="Typing">3.研修期間を大切に考えております。</h3>
            <div class="scroll-top">
              <p class="mb-3">一人一人がスキルアップできるように、社内研修制度を設けています。</p>
              <p>業務未経験の方も一から学べますので、どなたでも確実に成長していけます。分からないことはいつでも聞けますので、安心して働けます。</p>
                </p>
            </div>
          </div>
        </div>
    </div>

    </section>

    <section class="recruit-info p-md-5">
      <h2 class="text-center my-5">募集要項</h2>
      <dl>
        <dt>応募資格</dt>
        <dd>
          <p>司法書士の有資格者（未経験者可）</p>
          <p>司法書士の実務経験者</p>
          <p>司法書士の業務に興味のある方（未経験者、受験生可）</p>
        </dd>
        <dt>雇用形態</dt>
        <dd>正社員</dd>

        <dt>勤務時間</dt>
        <dd>9:00 ～ 18:00</dd>
        
        <dt>勤務地</dt>
        <dd>福岡県福岡市博多区博多駅前3-27-25-9F (出張あり)</dd>
        
        <dt>休日</dt>
        <dd>土曜・日曜・祝日・夏季・年末年始</dd>
        
        <dt>勤務地</dt>
        <dd>福岡県福岡市博多区博多駅前3-27-25-9F</dd>
        

        <dt>待遇・福利厚生</dt>
        <dd>
          <p>所内規定による（休日手当・賞与・昇給有）</p>
          <p>各種保険完備</p>
          <p>会費は事務所負担</p>
          <p>試用期間有り（社内規定に準ずる）</p>
        </dd>

        <dt>応募方法</dt>
        <dd>
          <p>まずはお電話にてご応募ください。</p>
          <p>追ってこちらから面接日等の詳細をお知らせします。</p>
          <p>お仕事や職場のことをもっと知りたいという方も、お気軽にお問合せ下さい。</p>
        </dd>

      </dl>
    </section>

</div>
<?php get_footer(); ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/typing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/scrollreveal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>
</html>