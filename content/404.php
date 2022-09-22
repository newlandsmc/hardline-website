<!doctype html>
<html lang="en">
  <head>
    <title>Hardline SMP | 404</title>
    <meta name="robots" content="noindex" />
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <nav id="mobile-nav">
      <a href="/"><img src="/assets/images/logo.webp" alt="SemiVanilla MC Logo" /></a>
      <div>
        <!--A fake / hidden checkbox is used as click reciever, so you can use the :checked selector on it.-->
        <input type="checkbox"></input>
        <!--Some spans to act as a hamburger. They are acting like a real hamburger, not that McDonalds stuff.-->
        <span class="hamburger"></span>
        <span class="hamburger"></span>
        <span class="hamburger"></span>
        <!--Too bad the menu has to be inside of the button but hey, it's pure CSS magic.-->
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/#scroll-rules">Rules</a></li>
          <li><a href="/#scroll-vote">Vote</a></li>
          <li><a href="https://hardlinesmp.tebex.io/" target="_blank">Store</a></li>
          <li><a href="https://discord.gg/qRKs348uKJ" target="_blank">Discord</a></li>
        </ul>
      </div>
    </nav>
    <nav id="main-nav">
      <div style="height: 100%; display: flex; justify-content: space-around;">
        <div class="hide-mobile" style="height: 100%;">
          <a href="/" style="height: 100%; width: 110px; display: flex; align-items: center; justify-content: center;"><img src="/assets/images/logo.webp" alt="SemiVanilla MC Logo" /></a>
        </div>
        <ul>
          <li><a href="/#scroll-top">Home</a></li>
          <li><a href="/#scroll-rules">Rules</a></li>
          <li><a href="/#scroll-vote">Vote</a></li>
          <li><a href="https://hardlinesmp.tebex.io/" target="_blank">Store</a></li>
          <li><a href="https://discord.gg/qRKs348uKJ" target="_blank">Discord</a></li>
        </ul>
      </div>
    </nav>
    <main>
      <div class="title" style="background-image: url(/assets/images/404-title.webp);">
        <video id="landing-title-video" autoplay loop muted hidden-src="/assets/videos/404-video.mp4" poster="/assets/images/404-title.webp"></video>
        <div>
          <h2>404</h2>
          <h3>Page not found.</h3>
        </div>
      </div>
    </main>
    <footer>
      <div id="footer-divider"></div>
      <p style="font-family: 'mctext'; width: 100%; text-align: center;">A new PVP survival Minecraft server.</p>
      <ul>
        <li><a href="/#scroll-rules">Rules</a></li>
        <li><a href="/#scroll-join">How to Join</a></li>
        <li><a href="https://discord.gg/3WzZ3x6wGp" target="_blank">Discord</a></li>
      </ul>
      <p style="font-family: 'mctext'; width: 100%; text-align: center;">Not affiliated with Mojang.</p>
    </footer>
    <script defer async type="module">
      import '/assets/javascript/jquery-3.6.0.min.js';
      if(window.innerWidth > 950) {
        var video = document.getElementById('landing-title-video');
        video.setAttribute('src', video.getAttribute('hidden-src'));
      }
    </script>
  </body>
</html>
