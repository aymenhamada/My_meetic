<!DOCTYPE HTML>

<html>
<head>
  <title>My_meetic</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="public/site_connexion/css/main.css" />

  <noscript><link rel="stylesheet" href="public/assets/css/noscript.css" /></noscript>
  <link rel="stylesheet" type="text/css" href="public/site_connexion/css/my_style.css">
</head>
<body class="is-preload">
  <div id="wrapper">

    <!-- Header -->
    <header id="header">
      <div class="logo">
        <span class="icon fas fa-heartbeat"></span>
      </div>
      <div class="content">
        <div class="inner">
          <h1>My_meetic</h1>
          <p>Site Premium De Rencontres Nationales Avec Plus de <?= $number ?> Membres
          </div>
        </div>
        <nav>
          <ul>
            <li><a href="#intro">Intro</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <!--<li><a href="#elements">Elements</a></li>-->
          </ul>
        </nav>
      </header>
      <form class="form-signin" action="index.php?action=logMember" method="post">
        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail"  name="email" class="form-control" placeholder="Email address" required autofocus autocomplete="off">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="passwd" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">

         Pas encore inscrit? inscrivez vous <a href="index.php?action=SignUp"><strong>ici</strong></a><br/>


       </div>
       <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
     </form>

     <!-- Main -->
     <div id="main">

      <!-- Intro -->
      <article id="intro">
        <h2 class="major">Intro</h2>
        <span class="image main"><img src="images/pic01.jpg" alt="" /></span>
        <p>My_meetic created and designed by Aymen HAMADA</p>
      </article>

      <!-- Work -->
      <article id="work">
        <h2 class="major">Work</h2>
        <span class="image main"><img src="images/pic02.jpg" alt="" /></span>
        <p>If you want to collab for your project, please contact me at aymen.hamada@epitech.eu</p>
      </article>

      <!-- About -->
      <article id="about">
        <h2 class="major">About</h2>
        <span class="image main"><img src="images/pic03.jpg" alt="" /></span>
        <p>I'm Aymen HAMADA, a Web Developper studying at <a href="www.epitech.eu">epitech</a></p>
      </article>

      <!-- Contact -->
      <article id="contact">
        <h2 class="major">Contact</h2>
        <form method="post" action="#">
          <div class="fields">
            <div class="field half">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" />
            </div>
            <div class="field half">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" />
            </div>
            <div class="field">
              <label for="message">Message</label>
              <textarea name="message" id="message" rows="4"></textarea>
            </div>
          </div>
          <ul class="actions">
            <li><input type="submit" value="Send Message" class="primary" /></li>
            <li><input type="reset" value="Reset" /></li>
          </ul>
        </form>
        <ul class="icons">
          <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
          <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
          <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
          <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
        </ul>
      </article>

      <article id="elements">
        <h2 class="major">Elements</h2>

        <section>
          <h3 class="major">Text</h3>
          <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
            This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
            This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
            <hr />
            <h2>Heading Level 2</h2>
            <h3>Heading Level 3</h3>
            <h4>Heading Level 4</h4>
            <h5>Heading Level 5</h5>
            <h6>Heading Level 6</h6>
            <hr />
            <h4>Blockquote</h4>
            <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
            <h4>Preformatted</h4>
            <pre><code>i = 0;

              while (!deck.isInOrder()) {
              print 'Iteration ' + i;
              deck.shuffle();
              i++;
            }

          print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
        </section>

        <section>


        </section>

        <section>



        </section>

        <section>

        </section>

        <section>
          i

        </section>

      </article>

    </div>

    <footer id="footer">
      <p class="copyright">&copy; My_meetic all right reserverd.</p>
    </footer>

  </div>

  
  <div id="bg"></div>


  <script src="public/site_connexion/js/jquery.min.js"></script>
  <script src="public/site_connexion/js/browser.min.js"></script>
  <script src="public/site_connexion/js/breakpoints.min.js"></script>
  <script src="public/site_connexion/js/util.js"></script>
  <script src="public/site_connexion/js/main.js"></script>
</body>
</html>


