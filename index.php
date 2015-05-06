<!-- index.html -->
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="scripts/rotate.js"></script>
  <script type="text/javascript" src="scripts/buttons.js"></script>
  <script type="text/javascript" src="scripts/move_worm.js"></script>

  <title>Book Central - An eCommerce Website for books</title>
  <script type="text/javascript">

  </script>
</head>

<body onload = "startRotation()">
  <!-- LOGO AND INFO -->
  <div id="page">

    <?php
    include("common/common_header.php");
    ?>

    <!-- INFO PARAGRAPH AND IMAGE -->
    <div id="content">
      <h1>HOME</h1>
      <div id="info">
        <p>It is the mission of Book Central to provide book enthusiasts with the books they are seeking at an affordable price! Our friendly staff will eagerly and happily assist you in this endeavor.</p>
        <p>We are gathered here today to find you educational, enjoyable, and great books. Our hope is that you will always be striving to learn more about the world that we live in. </p>
        <img id = "worm" src="img/bookWorm.jpg" alt="Eternal peace" height="90">
      </div>

      <div id="ReaderImg">
        <img id = "coverRotate" src="" alt="Eternal peace" height="250" width="170">
      </div>
    </div>
    <hr size="2">

    <button onclick="getTime()">What day is it?</button>
    <input type="button" value="Move Worm!" onclick="moveRight();" />

    <p id="demo"></p>

    <?php
    include("common/common_footer.php");
    ?>

  </div>
</body>

</html>
