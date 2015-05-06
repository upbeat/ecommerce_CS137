<!-- index.html -->
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
      <h1>SITE MAP</h1>
      <ol>
        <li><a href="index.php" style="text-decoration:none">Home Page</a></li>
        <li><a href="contact_info.php" style="text-decoration:none">Contact</a></li>
        <li><a href="feedback.php" style="text-decoration:none">Feedback</a></li>
        <li><a href="find_books.php" style="text-decoration:none">Order Books</a></li>
        <li><a href="about_us.php" style="text-decoration:none">About Us</a></li>
        <li>Catalog: </li>
          <ul>
            <li><a href="featured_books_catalog.php" style="text-decoration:none">Featured</a></li>
            <li><a href="clearance_books_catalog.php" style="text-decoration:none">Clearance</a></li>
            <li><a href="antique_books_catalog.php" style="text-decoration:none">Antique</a></li>
          </ul>
      </ol>
    </div>

    <hr size="2">
    <!-- HORIZONTAL LINE -->
    <?php
    include("common/common_footer.php");
    ?>
  </div>
</body>

</html>
