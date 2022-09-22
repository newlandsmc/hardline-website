<!doctype html>
<html lang="en">
  <head>
    <title>Hardline SMP | 1.19.2 PVP Minecraft Server</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script async defer>
      function copyToClipboard(id,ip,morehelp) {
        var aux = document.createElement("input");
        aux.setAttribute("value", ip);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        document.getElementById(id).style.backgroundColor = "var(--action-taken)";
        document.getElementById('overlay-more-help').href = morehelp;
        document.getElementById('overlay-ip').innerHTML = ip;
        $('.overlay').addClass('active');
      }
      function overlayDismiss() {
        $('.overlay').removeClass('active');
      }
    </script>
    <script defer async type="module">
      import '/assets/javascript/jquery-3.6.0.min.js';
      $(function() {
        $('.scroll').click(function() {
          var id = $(this).attr('href');
          $('html,body').animate({ scrollTop: $(id).offset().top }, 'slow');
          return false;
        });
      });
    </script>
    <style>
      section img {
        margin: 0px auto;
      }
      #frog {
        position: absolute;
        left: 30px;
        top: -100px;
        width: 180px;
      }
      #allay {
        position: absolute;
        right: -80px;
        top: 0px;
        width: 120px;
      }
      @media (max-width: 650px) {
        #allay {
          right: -2px;
          width: 80px;
        }
      }
    </style>
  </head>
  <body id="landing-body">
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
          <li><a class="scroll" href="#scroll-top">Home</a></li>
          <li><a class="scroll" href="#scroll-rules">Rules</a></li>
          <li><a class="scroll" href="#scroll-vote">Vote</a></li>
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
          <li><a class="scroll" href="#scroll-top">Home</a></li>
          <li><a class="scroll" href="#scroll-rules">Rules</a></li>
          <li><a class="scroll" href="#scroll-vote">Vote</a></li>
          <li><a href="https://hardlinesmp.tebex.io/" target="_blank">Store</a></li>
          <li><a href="https://discord.gg/qRKs348uKJ" target="_blank">Discord</a></li>
        </ul>
      </div>
    </nav>
    <main>
      <div id="scroll-top" class="title" style="background: linear-gradient( rgba(0, 0, 0, 0) 35%, rgba(0, 0, 0, 1) ), url(/assets/images/landing-title.webp); background-size: cover; background-position: 85%;">
      </div>
      <div class="title" style="position: absolute; z-index: 3;">
        <div class="landing-title-text" style="text-align: center;">
          <img class="landing-logo" src="/assets/images/logo.webp" alt="SemiVanilla MC Logo" />
          <h2 style="margin: 30px;">1.19.2 PVP Survival</h2>
          <p class="ip hide-mobile">play.hardlinesmp.com</p>
          <div style="width:100%">
            <button type="button" id="ip-button" onclick="copyToClipboard('ip-button','play.hardlinesmp.com','#scroll-join')">Join Now!</button>
          </div>
          <a id="scrollbutton" class="scroll" href="#welcome">
            <span></span>
            <p style="display: none;">Learn More</p>
          </a>
        </div>
        <div style="position:absolute; bottom:80px;" id="welcome"></div>
      </div>
      <div class="content" id="landing">
        <div class="shadow"></div>
        <section class="center" style="flex-direction: column; margin: 50px;">
          <h1 id="grabber">Fight to Survive. Survive to strive.</h1>
        </section>
        <section id="scroll-rules" class="center" style="position: relative; background: linear-gradient(330deg, rgb(15,19,28), rgb(30 39 58));">
          <div>
            <h3>Rules</h3>
          </div>
        </section>
        <section id="scroll-vote" class="center" style="position: relative; background: linear-gradient(330deg, rgb(15,19,28), rgb(30 39 58));">
          <div>
            <h3>Vote</h3>
          </div>
        </section>
        <section id="scroll-join" class="center" style="position: relative; background: linear-gradient(330deg, rgb(15,19,28), rgb(30 39 58));">
          <div>
            <h3>How to Join</h3>
          </div>
        </section>
      </div>
      <div class="content" style="background: linear-gradient(var(--primary) 50%, var(--secondary) 50%); margin-bottom: 0px; width: 100%; max-width: 100%;">
        <section class="center" style="position: relative; background: linear-gradient(90deg, rgb(24 12 32), rgb(73 37 96)); border-radius: 50px; flex-direction: column; width: auto; max-width: 90%;">
          <h4 style="padding: 0px 30px;">JOIN OUR DISCORD!</h4>
          <a href="https://discord.gg/qRKs348uKJ" target="_blank"><button type="button" style="margin: 20px 0 0 0;">Join Discord!</button></a>
        </section>
      </div>
      <div class="overlay">
        <div class="overlay-bg" onclick="overlayDismiss()"></div>
        <div class="overlay-fg">
          <p id="overlay-ip" class="ip">play.hardlinesmp.com</p>
          <p style="margin:10px 0 30px 0;">Copied to Clipboard!</p>
          <a class="scroll" id="overlay-more-help"><button type="button" onclick="overlayDismiss()">More Help?</button></a>
          <button type="button" onclick="overlayDismiss()">Okay!</button>
        </div>
      </div>
    </main>
    <footer>
      <div id="footer-divider"></div>
      <p style="font-family: 'mctext'; width: 100%; text-align: center;">A new PVP survival Minecraft server.</p>
      <ul>
        <li><a class="scroll" href="#scroll-rules">Rules</a></li>
        <li><a class="scroll" href="#scroll-join">How to Join</a></li>
        <li><a class="scroll" href="https://discord.gg/3WzZ3x6wGp" target="_blank">Discord</a></li>
      </ul>
      <p style="font-family: 'mctext'; width: 100%; text-align: center;">Not affiliated with Mojang.</p>
    </footer>
  </body>
</html>
