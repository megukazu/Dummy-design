<?php get_header(); ?>
  <div class="l-wrapper">
    <div class="l-main">
      <div class="l-container is-sm">
        <h1 class="c-post__title">404 Not found.</h1>
        <p>
          大変申し訳ございません。<br>
          お探しのページは削除されたか、URLが間違っている可能性があります。<br>
          URLをご確認いただき、トップページまたは上部ナビゲーションメニューからお探しのページへアクセスしてください。
        </p>
        <p>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">&raquo;トップページへ戻る</a>
        </p>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
