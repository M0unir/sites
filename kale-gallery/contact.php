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
        <li >
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
        <li class="active"><a href="contact.php">CONTACT <i class="fa fa-caret-down"></i></a>
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

  <section class="section ">

    <div class="container">
      <div class="center">
        <h3>Drop us a note</h3>
        <p>For Business Inquiries, info and all other things use the form bellow.</p>
      </div>
      <hr class="big transparent">
      <form action="" id="contactform" method="post">
          <div class="row">
            <div class="col-1-2 xs-full">
              <div>
                  <label for="name">Name:</label>
                  <input type="text" id="name"  placeholder="Enter Name"/>
              </div>
              <div>
                  <label for="mail">E-mail:</label>
                  <input type="email" id="mail"  placeholder="Enter Email"/>
              </div>

            </div>
            <div class="col-1-2 xs-full">
              <div>
                  <label for="mail">Phone:</label>
                  <input type="email" id="phone"  placeholder="Enter phone"/>
              </div>
              <div>
                  <label for="mail">Phone:</label>
                  <input type="email" id="phone"  placeholder="Enter phone"/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-full xs-full">
              <div>
                <label for="msg">Message:</label>
                <textarea id="msg" placeholder="Enter Message"></textarea>
              </div>
              <div class="center">
                  <button type="submit">Send your message</button>
              </div>
            </div>
          </div>
      </form>

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
