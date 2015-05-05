<!-- index.html -->
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="scripts/rotate.js"></script>
  <title>Book Central - An eCommerce Website for books</title>
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
      </div>

      <div id="ReaderImg">
        <img id = "coverRotate" src="" alt="Eternal peace" height="200" width="300">
      </div>
    </div>
    <hr size="2">

    <button onclick="getElementById('demo').innerHTML=Date()">The time is?</button>

    <p id="demo"></p>

    <button onclick="getElementById('demo2').innerHTML='Hunger Games'">Secret featured book?</button>

    <p id="demo2"></p>

    <footer>
      <small>&copy Copyright 2015, Example Corporation. All Rights Reserved. </small>
    </footer>
  </div>
</body>

</html>
