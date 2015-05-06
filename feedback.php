<!-- index.html -->
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style_feedback.css">
  <title>Book Central - An eCommerce Website for books</title>
</head>

<body>
  <script type="text/javascript" src="scripts/check_feedback.js"></script>
  <!-- LOGO AND INFO -->
  <div id="page">
    <?php
    include("common/common_header.php");
    ?>

    <!-- INFO PARAGRAPH AND IMAGE -->
    <div id="content">
      <h1>GIVE US YOUR FEEDBACK!</h1>
      <br>
      <form id="feedback" action="scripts/process_feedback.php" onsubmit="validateForm()" method="post">
        <fieldset class ="fieldset">
          <legend>Feedback</legend>
          <table summary = "Feedback Form">
            <tr valign = "top">
              <td>Name:</td>
              <td><input type ="text" name="name" size ="40" /></td>
            </tr>
            <tr valign = "top">
              <td>Phone Number:</td>
              <td><input type ="text" name="phone" size ="40" /></td>
            </tr>
            <tr valign = "top">
              <td>Email Address:</td>
              <td><input type ="text" name="email" size ="40" /></td>
            </tr>
          </table>

          <table>
            <tr valign = "top">
              <td>Book Title:</td>
              <td><input type ="text" name="book_title" size ="40" required/></td>
            </tr>
            <tr valign = "top">
              <td>Book Genre:</td>
              <td><select name ="genre">
                <option> </option>
                <option>Children </option>
                <option>Fiction </option>
                <option>Mystery </option>
                <option>Romance </option>
                <option>Other </option>
            </tr>
          </table>

          <table>
          <tr>
            <td>Rate Book:</td>
          </tr>
          <tr>
            <td><input type="radio" name="rating" value="Worst Book" >Worst Book</td>
            <td><input type="radio" name="rating" value="Dissatisfied"> Dissatisfied</td>
            <td><input type="radio" name="rating" value="Neutral" checked> Neutral</td>
            <td><input type="radio" name="rating" value="Enjoyed"> Enjoyed</td>
            <td><input type="radio" name="rating" value="Loved it"> Loved it!</td>
          </tr>
          </table>

          <table>
          <tr valign="top">
            <td>Comments:</td>
            <td><textarea name="message" rows="6" cols ="45"></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td align = "right">
              <input type="submit" value = "Send Feedback" />
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
