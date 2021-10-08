  <footer id="footer" class="p-4">
    <div class="d-lg-flex justify-content-between my-3">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
      <ul class="d-flex justify-content-evenly flex-wrap my-4">
        <li class="mx-md-4 m-2"><a href=""><i class="fas fa-angle-right me-1"></i>ホーム</a></li>
        <li class="mx-md-4 m-2"><a href=" <?php echo esc_url( home_url('/business')); ?>"><i class="fas fa-angle-right me-1"></i>取扱い業務</a></li>
        <li class="mx-md-4 m-2"><a href=" <?php echo esc_url( home_url('/company')); ?>"><i class="fas fa-angle-right me-1"></i>事務所紹介</a></li>
        <li class="mx-md-4 m-2"><a href=" <?php echo esc_url( home_url('/news')); ?>"><i class="fas fa-angle-right me-1"></i>ニュース</a></li>
        <li class="mx-md-4 m-2"><a href=" <?php echo esc_url( home_url('/recruit')); ?>"><i class="fas fa-angle-right me-1"></i>採用情報</a></li>
      </ul>
    </div>
    <div class="small">
      <p class="my-2">〒812-0011<span class="br">
          福岡県福岡市博多区博多駅前3-27-25-9F</span></p>
      <p>TEL：0120-123-456 <span class="br-sp ms-2">FAX：0120-123-789</span></p>
    </div>
    <p class="text-center small my-4">Copyright © Riv司法書士事務所 All Rights Reserved.</p>
    <a href="#top" class="page_top"></a>
  </footer>
  <!-- /footer -->
  <div class="openbtn d-lg-none"><span></span><span></span><span></span>
  </div>
  <nav id="g-nav">
    <div id="g-nav-list">
      <ul>
        <li>
          <a href=" <?php echo esc_url( home_url('/')); ?>" class="d-flex justify-content-between align-items-center">
            Top
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li>
        <li>
          <a href=" <?php echo esc_url( home_url('/business')); ?>" class="d-flex justify-content-between align-items-center">
            取扱い業務
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li>
        <li>
          <a href=" <?php echo esc_url( home_url('/company')); ?>" class="d-flex justify-content-between align-items-center">
            事務所紹介
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li>
        <li>
          <a href=" <?php echo esc_url( home_url('/news')); ?>" class="d-flex justify-content-between align-items-center">
            ニュース
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li>
        <li>
          <a href=" <?php echo esc_url( home_url('/recruit')); ?>" class="d-flex justify-content-between align-items-center">
            採用情報
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li>
      </ul>
      <div class="border p-3 mt-5 mx-3 small">
        <a href="tel:0120-123-456" class="d-block text-center"><i class="fa fa-phone me-2"></i>0120-123-456</a>
      </div>
      <p class="text-center my-1">月～金 09:00-17:00 (土日祝休み)</p>
    </div>
  </nav>
  <!-- mobile-menu -->
  <?php wp_footer(); ?>