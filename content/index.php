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
      #votelinks {
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
      }

      #votelinks div {
        padding-top: 25px;
        padding-bottom: 25px;
        line-height: 2em;
        text-align: center;
        width: 33%;
        min-width: 250px;
      }
      #votelinks h4 {
        text-align: center;
      }
      #votelinks div h4 {
        font-weight: normal;
        color: var(--content);
      }
      section img {
        margin: 0px auto;
      }
    </style>
  </head>
  <body id="landing-body">
    <nav id="mobile-nav">
      <a href="/"><img src="/assets/images/logo.webp" alt="Hardline SMP Logo" /></a>
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
          <a href="/" style="height: 100%; width: 110px; display: flex; align-items: center; justify-content: center;"><img src="/assets/images/logo-small.webp" alt="Hardline SMP Logo" /></a>
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
          <img class="landing-logo" src="/assets/images/logo.webp" alt="Hardline SMP Minecraft Style Logo" />
          <h2 style="margin: 30px;">1.19.2 PVP SURVIVAL</h2>
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
      <div class="landing-wrapper" style="position: relative;">
        <div class="content" id="landing">
          <div class="shadow"></div>
          <section class="center" style="flex-direction: column; margin: 50px;">
            <h1 id="grabber">Fight to Survive. Survive to strive.</h1>
          </section>
          <section class="center">
            <div>
              <img class="wide" src="/assets/images/landing-castle.webp" alt="Minecraft style castle" />
            </div>
            <div>
              <h3>Secure Your Base</h3>
              <p>Tripwires. Lava pools. Trapdoors. Use whatever you need to protect your base from others in a pure survival world with NO land claiming. This is not a world for the weak.</p>
            </div>
          </section>
          <section class="center">
            <div>
              <h3>Build Your Arsenal</h3>
              <p>Locate and loot drop crates around the world while fighting off others trying to do the same. Use rare custom enchants to take your weapons to the next level. Collect limited release items with OP enchant combinations.</p>
            </div>
            <div>
              <img class="wide" src="/assets/images/landing-steve.webp" alt="Steve with glowing diamond sword" />
            </div>
          </section>
          <section class="center">
            <div>
              <img class="wide" src="/assets/images/features-map.webp" alt="Minecraft map" />
            </div>
            <div>
              <h3>Defend Your Name</h3>
              <p>Slay your way to the top of the leaderboard and hold your position while you defend your growing dominion from would-be raiders. Create a party to team up with others and control the world.</p>
            </div>
          </section>
        </div>
        <div style="position:absolute; bottom:80px;" id="scroll-rules"></div>
      </div>
      <div class="landing-wrapper" style="position: relative; background-color:var(--secondary-active)">
        <div class="content">
          <section class="center">
            <div>
              <h3>Rules</h3>
              <section style="text-align: left; padding-bottom: 0px;">
                <h4>Be Careful</h4>
                <ul>
                  <li class="rules">Trusting players is at-your-own-risk! (We are not responsible for stolen items - keep them well hidden!)</li>
                  <li class="rules">Trades and job agreements are at-your-own-risk! (Use the /trade GUI to avoid scams.)</li>
                  <li class="rules">Do not log out somewhere unsafe! (We are not responsible for deaths on log-in due to missing blocks, placed lava, etc.)</li>
                </ul>
              </section>
              <section style="text-align: left; padding-bottom: 0px;">
                <h4>Be Kind</h4>
                <ul>
                  <li class="rules">Harassment, threats, verbal abuse, hateful speech, and offensive generalizations are prohibited.</li>
                  <li class="rules">No bullying. (Do not spawn camp, repeatedly kill the same player, or target new players.)</li>
                  <li class="rules">No trolling or antagonizing. (Do not participate in actions intended only to upset others.)</li>
                  <li class="rules">Keep other's feelings in mind when using chat. (Staff have the right to shut down a conversation if needed.)</li>
                  <li class="rules">Do not spam.</li>
                </ul>
              </section>
              <section style="text-align: left; padding-bottom: 0px;">
                <h4>Be Fair</h4>
                <ul>
                  <li class="rules">Any hack or mod that gives you an unfair advantage in the game is not allowed.
                    <ul>
                      <li class="rules"><strong>Banned mods:</strong> minimaps</li>
                      <li class="rules"><strong>Approved mods:</strong> performance enhancers (like Optifine), shaders, gameplay recording, inventory management, status HUDs</li>
                    </ul>
                  </li>
                  <li class="rules">Do not exploit bugs in our server's features. Vanilla exploit are allowed, unless they involve duplicating items.</li>
                  <li class="rules">If you share your account, you are responsible for anything that happens on your account.</li>
                  <li class="rules">Do not purposely sit AFK on the server. (no AFK machines, farms, etc.)</li>
                  <li class="rules">Alt accounts are prohibited.</li>
                </ul>
              </section>
              <section style="text-align: left;">
                <h4>Be Hardline</h4>
                <ul>
                  <li class="rules">Do not discuss or appeal bans/mutes/etc in public channels. (An appeal email is provided in every punishment message, or on the Discord <strong>#faq</strong> page.)</li>
                  <li class="rules">Do not intentionally disparage, tarnish, or otherwise harm the server or staff.</li>
                  <li class="rules">Do not advertise other Minecraft servers or Discords.</li>
                  <li class="rules">Please only use English in public channels. (We are generally unable to moderate other languages.)</li>
                </ul>
              </section>
            </div>
          </section>
        </div>
        <div style="position:absolute; bottom:80px;" id="scroll-vote"></div>
      </div>
      <div class="landing-wrapper" style="position: relative; background-color:var(--secondary)">
        <div class="content">
          <section class="center">
            <div>
              <h3>Vote</h3>
              <div>
                <section style="width: auto; position: relative; height: fit-content;" class="center" id="votelinks">
                  <div>
                    <h4>minecraft-mp.com</h4>
                    <a href="https://minecraft-mp.com/server/298736/vote/" target="_blank"><button type="button" id="vote1" onclick="buttonClicked('vote1')">Vote</button></a>
                  </div>
                  <div>
                    <h4>topmcservers.com</h4>
                    <a href="https://topmcservers.com/server/1610/vote" target="_blank"><button type="button" id="vote2" onclick="buttonClicked('vote2')">Vote</button></a>
                  </div>
                  <div>
                    <h4>minelist.net</h4>
                    <a href="https://minelist.net/vote/3953" target="_blank"><button type="button" id="vote3" onclick="buttonClicked('vote3')">Vote</button></a>
                  </div>
                  <div>
                    <h4>minecraft-server.net</h4>
                    <a href="https://minecraft-server.net/vote/semivanilla_mc/" target="_blank"><button type="button" id="vote4" onclick="buttonClicked('vote4')">Vote</button></a>
                  </div>
                  <div>
                    <h4>serverlist101.com</h4>
                    <a href="https://serverlist101.com/server/2761/vote/" target="_blank"><button type="button" id="vote5" onclick="buttonClicked('vote5')">Vote</button></a>
                  </div>
                  <div>
                    <h4>minecraft.buzz</h4>
                    <a href="https://minecraft.buzz/vote/3877" target="_blank"><button type="button" id="vote6" onclick="buttonClicked('vote6')">Vote</button></a>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
        <div style="position:absolute; bottom:80px;" id="scroll-join"></div>
      </div>
      <div class="landing-wrapper">
        <div class="content" style="max-width: 1400px;">
          <section class="center" style="padding-left: 0px; padding-right: 0px;">
            <div style="display: flex; flex-direction: column; align-items: center;">
              <h3>How to Join</h3>
              <section class="join-section">
                <div class="narrow" style="margin-bottom: 20px;">
                  <h4>Java Edition</h4>
                  <ol style="text-align: left;">
                    <li>In Minecraft, go to <strong>Multiplayer</strong> and then <strong>Add Server</strong>.</li>
                    <li>Enter a name, this can be anything you want!</li>
                    <li>Enter "play.semivanilla.com" for the <strong>Server Address</strong>.</li>
                    <li>Click <strong>Done</strong>.</li>
                    <li>Select our server and join!</li>
                  </ol>
                </div>
                <div>
                  <img class="wide" src="/assets/images/join-java-edition.webp" alt="Minecraft Java Edition Screenshot" />
                </div>
              </section>
              <section class="join-section">
                <div>
                  <img class="wide" src="/assets/images/join-bedrock-edition.webp" alt="Minecraft Bedrock Edition Screenshot" />
                </div>
                <div class="narrow">
                  <h4>Bedrock Edition</h4>
                  <ol style="text-align: left;">
                    <li>In Minecraft, go to <strong>Play</strong> and then <strong>Servers</strong>.</li>
                    <li>Scroll to the bottom and tap on <strong>Add Server</strong>.
                    <li>Enter a name, this can be anything you want!</li>
                    <li>Enter "play.semivanilla.com" for the <strong>Server Address</strong>. Leave the default port (19132).</li>
                    <li>Tap <strong>Play</strong>!</li>
                  </ol>
                </div>
              </section>
            </div>
          </section>
        </div>
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
