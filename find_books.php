<!-- index.html -->
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style_find_books.css">
  <title>Book Central - An eCommerce Website for books</title>
</head>

<body>
  <script type="text/javascript" src="scripts/check_find_books.js"></script>
  <!-- LOGO AND INFO -->
  <div id="page">
    <?php
    include("common/common_header.php");
    ?>

    <!-- INFO PARAGRAPH AND IMAGE -->
    <div id="content">
      <h1>FIND BOOKS</h1>

      <br>
      <form id="find" action="scripts/process_purchase.php" onsubmit="processForm()" method="post">
        <fieldset class ="fieldset">
          <legend>Order Books</legend>
          <table summary = "Find Books">
            <tr valign = "top">
              <td>Your Name:</td>
              <td><input type ="text" name="name" size ="40" required/></td>
            </tr>
            <tr valign = "top">
              <td>Email Address:</td>
              <td><input type ="text" name="email" size ="40" required/></td>
            </tr>
          </table>

          <table>
            <tr valign = "top">
              <td>Select from our vast collection of books!</td>
              <td><select id ="bookPickNormal">
                <option value = "0"> </option>
                <option value="1">Hunger Games - Suzanne Collins ($11)</option>
                <option value="2">Sherlock Holmes - Sir Conan Doyle ($12)</option>
                <option value="3">The BFG - Roald Dahl ($12)</option>
                <option value="4">Maze Runner - James Dashner ($7) </option>
                <option value="5">Pride and Prejudice - Jane Austen ($7) </option>
              </td>
              <td>Quantity:</td>
              <td><select id ="normalQuantity">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
              </td>
            </tr>
          </table>

          <table>
            <tr valign = "top">
              <td>Select from our clearance section! Under $5 </td>
              <td><select id ="bookPickClearance">
                <option> </option>
                <option value="1">Hamlet - William Shakespeare ($2)</option>
                <option value="2">Holes - Louis Sachar ($2)</option>
                <option value="3">The Westing Game - Ellen Raskin ($1)</option>
              </td>
              <td>Quantity:</td>
              <td><select id ="clearanceQuantity">
                  <option value= 0>0</option>
                  <option value= 1>1</option>
                  <option value= 2>2</option>
                  <option value= 3>3</option>
              </td>
            </tr>
          </table>

          <table>
            <tr valign = "top">
              <td>Select Location to Pickup Book</td>
              <td><select name ="genre">
                <option>Book Central - Irvine </option>
                <option>Book Central - Anaheim </option>
                <option>Langson Library - UCI</option>
                <option>Barnes and Noble - Spectrum</option>
            </tr>
          </table>

          <table>
          <tr valign="top">
            <td>Limited time offer:</td>
            <td><input type="checkbox" name="discount" value="discount" id = "thisDiscount"> Take a 50% discount<br></td>
          </tr>
          <tr>
            <td></td>
            <td align = "right">
              <input type="submit" value = "Confirm Purchase" />
              <input type ="reset" value ="Reset Form" />
            </td>
          </tr>
          </table>
        </fieldset>
      </form>
    </div>

    <!-- HORIZONTAL LINE -->
    <hr size="2">
    <?php
    include("common/common_footer.php");
    ?>
  </div>
</body>

</html>
