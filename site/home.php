<?php

    session_start();
    if(isset($_SESSION['name'])) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="styles/home_style.css">
    <script src="javascript/jquery.js"></script>
    <script src="javascript/game/game.js"></script>
</head>
<body>
   <input type="hidden" id="hdnSession" data-value='<?php echo $_SESSION['name'] ?>' />
    <div id="wraper-top">
        <a href="php_scripts/logout.php" id="logout">Log me off</a>
        <span id="user"><?php echo 'Loged in as <strong>', $_SESSION['name'], '</strong>'; ?></span>
    </div>

    <div id="wraper-bot">
        <a href="#" id="reconnect">Reconnect to server</a>
    </div>
</body>
</html>
  
<?php
        
    } else {
        echo 'u are not loged in';
        header("location: /sirius/site/index.php");   
    }

?>