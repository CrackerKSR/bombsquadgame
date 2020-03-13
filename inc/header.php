
<html>

<head>
<?php include_once 'inc/session.php' ?>
  <title> <?php echo $title; ?> </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:site_name" content="BombSquade Game"/>
  <meta property="og:title" content="BombSquaders World"/>
<meta property="og:description" content="The only place to download all bombsquad related contents."/>

<meta property="og:url" content="http://bombsquadgame.herokuapp.com/">
<meta property="og:type" content="blog"/>


  <meta property="og:image" content="https://i.ibb.co/FBB59db/Pics-Art-02-27-09-37-59.png" />
  <link rel="icon" type="text/css" href="https://files.ballistica.net/bombsquad/promo/BombSquadLogo24.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/flex.css">

  <?php if (basename($_SERVER['PHP_SELF']) == 'download_bs.php') : ?>
    <link rel="stylesheet" href="style/download_bs.css">
  <?php elseif (basename($_SERVER['PHP_SELF']) == 'download_modpacks.php') : ?>
    <link rel="stylesheet" href="style/download_modpacks.css">
  <?php elseif (basename($_SERVER['PHP_SELF']) == 'm_downloads.php') : ?>
    <link rel="stylesheet" href="style/m_downloads.css">
  <?php elseif (basename($_SERVER['PHP_SELF']) == 'download_servers.php') : ?>
    <link rel="stylesheet" href="style/download_servers.css">
  <?php elseif (basename($_SERVER['PHP_SELF']) == 'misc.php') : ?>
    <link rel="stylesheet" href="style/misc.css">
  <?php elseif ((basename($_SERVER['PHP_SELF']) == 'm_user.php')) : ?>
    <link rel="stylesheet" href="style/user.css">

  <?php endif; ?>

    <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase.js"></script>
  <script>

    var firebaseConfig = {
        apiKey: "AIzaSyAxzDpJSMvVjR7rxd7SrrlvNhPSQW28pTo",
        authDomain: "xampp-ksr.firebaseapp.com",
        databaseURL: "https://xampp-ksr.firebaseio.com",
        projectId: "xampp-ksr",
        storageBucket: "xampp-ksr.appspot.com",
        messagingSenderId: "827829814914",
        appId: "1:827829814914:web:f5949e92735e3a3b28569b",
        measurementId: "G-N0TFM9Z98P"
    };
    firebase.initializeApp(firebaseConfig);



</script>
<style>
  #userAvatar{
    height: 20px;
    width: 20px;
    margin-left: 4px;
    margin-right: 4px;
    padding: 0;
    margin-top: 0;
    margin-bottom: 0;
    border-radius: 50%;
  }
  
</style>
</head>

<body style="background-color: black;">
  <!-- facebook save button --> 
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=636043716811253&autoLogAppEvents=1"></script>
<!-- facebook join group button -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=2382453241989183&autoLogAppEvents=1"></script>
<!-- facebook plugin for page lik -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=2382453241989183&autoLogAppEvents=1"></script>
<!-- fb comments -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=2382453241989183&autoLogAppEvents=1"></script>
<!--   <video autoplay muted loop id="myVideo">
    <source src="https://bselite.000webhostapp.com/fire.webm" type="video/mp4" poster="https://i.pinimg.com/originals/10/5b/18/105b18b8db617d4c02aa417cadbdae57.jpg">
  </video> -->
  <!-- ///////////// Start Of Header //////////// -->
  <header>
<?php 
  if ( isset( $_SESSION['elite_session'] ) and $_SESSION['elite_session'] == 'true')  {
    $userAvatar = $_SESSION['dp'];
    $userName = $_SESSION['name'];
  }else{
    $userAvatar = 'https://i.ibb.co/C90gYv3/BS-icona.png' ;
    $userName = "";
  }
?>

    <a class="logo" href="index.php">THE BOMBSQUAD GAME <img src="<?php echo $userAvatar; ?>" id='userAvatar'  > </a>

    <input id="nav" type="checkbox">
    <label for="nav"></label>

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="m_downloads.php">Downloads</a></li>
        <li><a href="m_user.php">User</a></li>
        <li><a href="m_about.php">About</a></li>
      </ul>
    </nav>
  </header>
  <!-- //////////// End of Header /////////// -->

  <main>

