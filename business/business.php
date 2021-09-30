<?php
 /* Template Name: business
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>取扱い業務｜士業テンプレート1</title>
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
    <img class="thumbnail-img" src="<?php echo get_template_directory_uri(); ?>/images/service/service.jpg" alt="">
    <div class="position-absolute text-center">
      <p>SERVICE</p>
      <h2 class="Typing">取扱い業務</h2>
    </div>
  </section>

  <div class="py-5 px-4 text-center">
    <p class="fs-5 my-5">Riv司法書士事務所は高い専門知識とサポート力で、
      <span class="br-pc">ご満足頂けるサービスをお約束します。</span>
      </p>
  </div>

  <section class="business-contents">
    
    <div class="row position-relative mt-4">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-1.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-4"><span class="mx-4">1</span>不動産登記</h2>
        <p class="p-xl-5 p-2">不動産登記とはお客様の大切な財産である土地・建物に対して、所在・面積の他、所有者の住所・氏名等を公の登記簿に記載して、その権利をお守りすることです。</p>
        <p class="mt-auto px-xl-5 p-2">また、一般に公開することにより、複雑な権利関係を誰にでもわかるようにし、安全且つ円滑に不動産取引をする役割を果しています。</p>
      </div>
      <div class="m-color position-absolute">
      </div>
    </div>

    <div class="row flex-row-reverse position-relative">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-2.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-4"><span class="mx-4">2</span>商業登記</h2>
        <p class="mt-auto p-xl-5 p-2">商業登記とは、会社法人等に関する取引上重要な一定の情報（商号・本店所在・資本金・目的・代表者の氏名等）を法務局に記録し、公開することにより会社の信用維持を図ると共に取引の安全と円滑を図る制度です。
          </p>
      </div>
      <div class="m-color position-absolute">
      </div>
    </div>

    <div class="row position-relative">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-3.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-4"><span class="mx-4">3</span>相続</h2>
        <p class="mt-auto p-xl-5 p-2">相続が発生すると、様々な手続きが必要となります。弊所では、相続放棄の手続や遺産分割協議書の作成など、相続に係る手続をお受けしております。</p>
      </div>
      <div class="m-color position-absolute">
      </div>
    </div>

    <div class="row flex-row-reverse position-relative">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-4.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-4"><span class="mx-4">4</span>贈与</h2>
        <p class="p-xl-5 p-2">
          不動産を生前贈与したい時は、法律に則った手続をしなければなりません。
          例えば親が持っている土地を子供に贈与税のかからない範囲で生前に贈与したいなど、よくご相談をいただくことがあります。</p>
        <p class="mt-auto px-xl-5 p-2">弊所では贈与にかかる相談から、遺言による贈与、贈与証書作成、申請書作成、登記申請までお受けしております。</p>

      </div>
      <div class="m-color position-absolute">
      </div>
    </div>

    <div class="row position-relative mt-4">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-5.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-4"><span class="mx-4">5</span>債権譲渡登記</h2>

        <p class="p-xl-5 p-2">債権譲渡登記とは、煩雑になりがちな債権譲渡手続きを負担が少なく簡便に行う方法として作られた登記制度です。</p>
        <p class="mt-auto px-xl-5 p-2">債権譲渡登記を利用することにより、簡単に債権譲渡の対抗要件（第三者に自分が担保権者だと主張するための要件）を備えることができるようになります。
        それにより、不動産を保有しない企業でも自己が保有している売掛金等の債権を担保として提供することで、金融機関から融資を受けられる機会が広がります。</p>

      </div>
      <div class="m-color position-absolute">
      </div>
    </div>

    <div class="row flex-row-reverse position-relative">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-6.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-4"><span class="mx-4">6</span>信託登記</h2>
        <p class="p-xl-5 p-2">信託とは、委託者の財産を受託者に移転し、その受託者が目的の範囲内でその信託財産を管理・運用し、そこから発生する利益を委託者または第三者に帰属させるものです。</p>
        <p class="mt-auto px-xl-5 p-2">弊所では信託関係登記業務全般（信託設定・信託受益権売買・信託財産処分による移転等）を取り扱っております。</p>
      </div>
      <div class="m-color position-absolute">
      </div>
    </div>

    <div class="row position-relative">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-7.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-4"><span class="mx-4">7</span>契約書作成</h2>
        <p class="mt-auto p-xl-5 p-2">契約書の作成・公正証書の作成・内容証明の作成・その他相談業務や、各種変更届申請、また供託手続その他債権譲渡登記まで幅広く取り扱っています。</p>
      </div>
      <div class="m-color position-absolute">
      </div>
    </div>

    <div class="row flex-row-reverse position-relative">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/service/service-8.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-4"><span class="mx-4">8</span>その他の法務</h2>
        <p class="mt-auto p-xl-5 p-2">
          成年後見申立や裁判所への提出書類作成業務、その他法律相談や企業への出張研修など幅広くお取扱いしております。

      </div>
      <div class="m-color position-absolute" style="height: 100%; z-index: -10; bottom: -10%;">
      </div>
    </div>

  </section>



  <!-- footer -->
  <?php get_template_part('includes/c-footer'); ?>      

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/typing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/scrollreveal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>

</body>
</html>