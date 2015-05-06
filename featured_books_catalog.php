<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style_catalog.css">
  <title>Book Central - An eCommerce Website for books</title>
</head>

<body">
  <!-- LOGO AND INFO -->
  <div id="page">

    <?php
    include("common/common_header.php");
    ?>

    <!-- INFO PARAGRAPH AND IMAGE -->
    <div id="content">
      <h1>FEATURED BOOKS: </h1>
      <div id = "book_catalog">
        <table summary = "featured_books">
          <tr>
            <td><img src = "bookCoverImg/cover0.jpg" alt = "Hunger Games" height = "200" width = "150"></td>
            <td><img src = "bookCoverImg/cover3.jpg" alt = "Sherlock" height = "200" width = "150"></td>
            <td><img src = "bookCoverImg/cover4.jpg" alt = "BFG" height = "200" width = "157"></td>
            <td><img src = "bookCoverImg/cover1.jpg" alt = "Maze Runner" height = "200" width = "150"></td>
            <td><img src = "bookCoverImg/cover2.jpg" alt = "Pride" height = "200" width = "150"></td>
          </tr>
          <tr>
            <td>Hunger Games - Suzanne Collins ($11)</td>
            <td>Sherlock Holmes - Sir Conan Doyle ($12)</td>
            <td>The BFG - Roald Dahl ($12)</td>
            <td>Maze Runner - James Dashner ($7)</td>
            <td>Pride and Prejudice - Jane Austen ($7)</td>
          </tr>
        </table>
      </div>

    <footer>
      <small>&copy Copyright 2015, Example Corporation. All Rights Reserved. </small>
    </footer>
  </div>
</body>

</html>
