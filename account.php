<html>
<head>
  <title>The Digital Bard</title>
   <link rel="stylesheet" href="style.css">
   <link href="https://fonts.googleapis.com/css?family=Cinzel|Arapey" rel="stylesheet">
   <link rel="icon" type="image/png" href="favicon.png">
</head>
<body>
<div id="main">
  <?php
    require 'pageTop.php';
  ?>
<div id="mid" class="parchmentSection">
<div id="midContent">
      <?php
      session_start();
      echo("<h1>Welcome, {$_SESSION['username']}</h1>");
      require_once("Dao.php");
        $dao = new Dao();
        $username = $_SESSION['username'];
        $poems = $dao->getPoemsByUser($username);
        foreach ($poems as $poem) {
          echo("<a href=\"poemDetail.php?id={$poem["poem_id"]}\"><div class=\"box fadeable\"><div class=\"storyTitle\">{$poem['title']}</div></div></a>");
        }
      ?>
 </div>
</div>
<?php
   require 'pageFooter.php'
?>
</div>
</body>
</html>
