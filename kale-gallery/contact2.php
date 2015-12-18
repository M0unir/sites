<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Kale Gallery</title>
  <meta name="description" content="Kale Art Gallery">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link href='https://fonts.googleapis.com/css?family=Abril+Fatface|Lato:400,300,300italic,700,400italic,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" id="theme" href="css/theme.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>

<body class="boxed">

  <header class="site-header center">
  <div class="container">
    <div class="logo">
      <div class=""></div>
      <a href="index.php">Kale Gallery</a>
    </div>
    <div class="mobile-nav-toggle">
      <span></span>
    </div>
    <nav class="main-nav">
      <ul>
        <li class="active">
          <a href="artists.php">ARTISTS</a>
        </li>
        <li>
          <a href="exhibitions.php">EXHIBITIONS</a>
        </li>
        <li>
          <a href="news.php">NEWS</a>
        </li>
        <li>
          <a href="about.php">ABOUT</a>
        </li>
        <li><a href="contact.php">CONTACT <i class="fa fa-caret-down"></i></a>
          <ul>
            <li><a href="contact.php">Style1</a></li>
            <li><a href="contact2.php">Style2</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>


    <section class="heading">
      <div class="container">
        <h1>Contact</h1>
      </div>
    </section>

    <section class="">
      <div class="map">
        <div class="overlay-map"></div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3145.4166751569282!2d-122.06976778491014!3d37.967404208826714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808566bb6617a201%3A0xe403ae1112bd367c!2sDiablo+Valley+College!5e0!3m2!1sen!2sus!4v1449289513865"
          width="" height="350" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
      </div>
    </section>

    <section class="section ">
      <div class="container">
        <div class="row">

          <div class="center">
            <h3>Drop us a note</h3>
            <p>For Business Inquiries, info and all other things use the form bellow.</p>
          </div>

            <hr class="big">
            <form action="" id="contactform" method="post">
              <div class="col-1-2 xs-full">

              <div>
                <label for="name">Name:</label>
                <input type="text" id="name" placeholder="Enter Name" />
              </div>
              <div>
                <label for="mail">E-mail:</label>
                <input type="email" id="mail" placeholder="Enter Email" />
              </div>
              <div>
                <label for="mail">Phone:</label>
                <input type="email" id="phone" placeholder="Enter phone" />
              </div>

            </div>

            <div class="col-1-2 xs-full">
              <div>
                <label for="msg">Message:</label>
                <textarea height="230" id="msg" placeholder="Enter Message"></textarea>
              </div>

            </div>
            <div class="row center">
              <button type="submit">Send your message</button>
            </div>
            </form>



        </div>


      </div>
    </section>


    <?php include 'include/footer.php' ?>






      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script type="text/javascript">
      </script>


      <script src="http://localhost:35729/livereload.js"></script>
      <script src="js/main.js"></script>

</body>

</html>
