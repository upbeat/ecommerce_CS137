<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style_catalog.css">
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
      <h1>CLEARANCE BOOKS: </h1>
      <div id = "book_catalog">
        <table summary = "clearance_books">
          <tr>
            <td><img src = "bookCoverImg/catalog_books/hamlet.jpg" alt = "Hamlet" height = "200" width = "150"></td>
            <td><img src = "bookCoverImg/catalog_books/holes.jpg" alt = "Holes" height = "200" width = "150"></td>
            <td><img src = "bookCoverImg/catalog_books/westing_game.jpg" alt = "Westing Game" height = "207" width = "157"></td>
          </tr>
          <tr>
            <td>Hamlet - William Shakespeare ($2)</td>
            <td>Holes - Louis Sachar ($2)</td>
            <td>The Westing Game - Ellen Raskin ($1)</td>
          </tr>
        </table>
      </div>

      <!-- HORIZONTAL LINE -->
      <hr size="2">
      <?php
      include("common/common_footer.php");
      ?>
  </div>
</body>

</html>
