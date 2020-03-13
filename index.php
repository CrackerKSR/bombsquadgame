<?php $title = 'THE BOMBSQUAD GAME '; ?>

<?php include 'inc/header.php' ?>
<center> 
<cite>Something big is coming</cite>
<em>"After years of work, it’s finally time to get this ball rolling… 🙂" -Eric Froemling (BombSquad Game Developer) </em>
<h1 id="demo"></h1>
</center>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 3, 2020 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "days " + hours + " hours "
  + minutes + " minutes " + seconds + " seconds ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<div class="flex-container">

  <a href="download_bs.php" class="card-link">
    <div class="flex-item">
      <div class="card bs">
        <div class="img"> </div>
        <div class="card-header">
          <h2>Bombsquad</h2>
        </div>
        <div class="card-middle">Vanila BombSquad for Windows, Linux, Mac and Android</div>
        <div class="card-footer">
          <h3>OPEN</h3>
        </div>
      </div>
    </div>
  </a>


  <a href="download_modpacks.php" class="card-link">
    <div class="flex-item">
      <div class="card modpack">
        <div class="img"> </div>
        <div class="card-header">
          <h2>ModPacks</h2>
        </div>
        <div class="card-middle">Modified Bombsquad from variouse modders</div>
        <div class="card-footer">
          <h3>OPEN</h3>
        </div>
      </div>
    </div>
  </a>

  <a href="download_mods.php" class="card-link">
    <div class="flex-item">
      <div class="card mod">
        <div class="img"> </div>
        <div class="card-header">
          <h2>Mods</h2>
        </div>
        <div class="card-middle">Download Mini Games (Mods)</div>
        <div class="card-footer">
          <h3>OPEN</h3>
        </div>
      </div>
    </div>
  </a>

  <a href="learn.php" class="card-link">
    <div class="flex-item">
      <div class="card learn">
        <div class="img"> </div>
        <div class="card-header">
          <h2>Learn Tricks</h2>
        </div>
        <div class="card-middle">Tricks, tips, ideas to improve the skill</div>
        <div class="card-footer">
          <h3>OPEN</h3>
        </div>
      </div>
    </div>
  </a>

  <a href="https://www.froemling.net/docs" target="_blank" class="card-link">
    <div class="flex-item">
      <div class="card doc">
        <div class="img"> </div>
        <div class="card-header">
          <h2>Documentation</h2>
        </div>
        <div class="card-middle">For modding purpose</div>
        <div class="card-footer">
          <h3>OPEN</h3>
        </div>
      </div>
    </div>
  </a>

  <a href="m_about.php" class="card-link">
    <div class="flex-item">
      <div class="card about">
        <div class="img"> </div>
        <div class="card-header">
          <h2>About</h2>
        </div>
        <div class="card-middle">Who we are? How can you Contact us?</div>
        <div class="card-footer">
          <h3>OPEN</h3>
        </div>
      </div>
    </div>
  </a>

</div>


<div class="fb-comments" data-href="https://www.facebook.com/Epic-BombSquader-1754300994609405/" data-width="" data-numposts="5" colorscheme='dark'></div>
<?php include 'inc/footer.php' ?>