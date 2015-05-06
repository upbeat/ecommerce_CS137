<!-- index.html -->
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style_about_us.css">

  <title>Book Central - An eCommerce Website for books</title>
</head>

<body>
  <!-- LOGO AND INFO -->
  <div id="page">
    <?php
    include("common/common_header.php");
    ?>

    <!-- INFO PARAGRAPH AND IMAGE -->
    <div id="content">
      <h1>ABOUT US</h1>
      <div id="info">
        <p>We founded Book Central in 2015, in order to serve the growing needs
          of readers in a technologically advanced time. The idea was, and still
          is, to help customers find the best books through high quality
          recommendations and book reviews. Book Central takes great pride in
          providing E-books and physical books. </p>
        <p>At Book Central we recognize that reading is both educational and enjoyable. We
        attempt to find books that will both challenge you and be fun to read. With
        reading learning more does not have to be to be difficult or unpleasant!
        Curling up on your couch to read a good book can be your favorite past time and
        our goal is to help you found more books for this past time. </p>
      </div>
      <div id="imageBookWorm">
        <img src="img/bookWorm.jpg" alt="Eternal peace" height="200">
      </div>
    </div>

    <!-- HORIZONTAL LINE -->
    <hr size="2">
    <?php
    include("common/common_footer.php");
    ?>
  </div>
</body>

</html>
