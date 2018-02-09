<?php
session_start();

?>

<head>

    <link rel="stylesheet" href="style.css">
    <script src="../jquery-3.2.0.min.js"></script>

</head>
<body>
  <?php

function redirect_to($newlocation){
header("Location: ". $newlocation);
exit;
}

  if(isset($_POST['submitreader'])){
    $_SESSION['username'] = htmlentities($_POST['username']);
    redirect_to("reader.php");
  }

  if(isset($_POST['submitblogger'])){
    $_SESSION['bloggername'] = htmlentities($_POST['bloggername']);
    redirect_to("blog.php");
  }

  ?>
    <div id="wrapper ">

        <form id="blogger" action="" method ="POST">
            <label for="blogger">Login as blogger</label>
            <input type="text" name ="bloggername" id="bloggername" placeholder="Please enter your username">
            <input type="submit" name="submitblogger" id="submitblogger" value="Enter">
        </form>

        <form id="reader" action="" method ="POST">
            <label for="reader">Login as reader</label>
           <input type="text" name ="username" id="username" placeholder="Please enter your username">
            <input type="submit" name="submitreader" id="submitreader" value="Enter">

        </form>

    </div>
</body>
