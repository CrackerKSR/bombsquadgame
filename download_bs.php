<?php $title = 'Bomsquad Downloads'; ?>

<?php include 'inc/header.php' ?>
<?php include 'inc/download_links.php' ?>



<div class="flex-container">
  <div class="flex-item">
    <div class="card win">
      <div class="img"> </div>
      <div class="card-header">

      </div>
      <div class="card-middle">
        <h1> Windows</h1>
      </div>

      <div class="card-footer">
        <a href="<?php echo $download_link['windows']; ?>">
          <div class="download-btn"> </div>
          <span class="download-text"> <i class="fa fa-windows"></i> Download</span>
        </a>
      </div>

    </div>
  </div>




  <div class="flex-item">
    <div class="card mac">
      <div class="img"> </div>
      <div class="card-header">

      </div>
      <div class="card-middle">
        <h1> MAC</h1>
      </div>
      <div class="card-footer">
        <a href="<?php echo $download_link['mac']; ?>">
          <div class="download-btn"> </div>
          <span class="download-text"><i class="fa fa-apple"></i> Download</span>
        </a>
      </div>
    </div>
  </div>

  <div class="flex-item">
    <div class="card linux">
      <div class="img"> </div>
      <div class="card-header">

      </div>
      <div class="card-middle">
        <h1>Linux</h1>

        <p>
          <small> <a href="<?php echo $download_link['linux32']; ?>" style="color: white;"> Click here for Linux 32 </a></small>
        </p>
      </div>
      <div class="card-footer">
        <a href="<?php echo $download_link['linux64']; ?>">
          <div class="download-btn"> </div>
          <span class="download-text"><i class="fa fa-linux"></i> Download</span>
        </a>
      </div>
    </div>
  </div>



  <div class="flex-item">
    <div class="card android">
      <div class="img"> </div>
      <div class="card-header">

      </div>
      <div class="card-middle">
        <h1>Android</h1>
      </div>
      <div class="card-footer">
        <a href="<?php echo $download_link['android']; ?>">
          <div class="download-btn"> </div>
          <span class="download-text"><i class="fa fa-android"></i> Download</span>
        </a>
      </div>
    </div>
  </div>

</div>

<!-- start main flex-container -->

<!-- 
<div class="flex-container">

<a href="#"  class="card-link">
  <div class="flex-item">
    <div class="card win">
      <div class="img"> </div>
      <div class="card-header"><h2> WINDOWS</h2></div>
      <div class="card-middle">Vanila BombSquad for Windows,ndroid</div>
      <div class="card-footer">
          <h3><a href="<?php echo $download_link['windows']; ?>" ><button> Download  </button></a></h3>
      </div>
      
    </div>
  </div>
</a>
<a href="#"  class="card-link">
  <div class="flex-item">
    <div class="card mac">
    <div class="img"> </div>
    <div class="card-header"> <h2>MAC</h2> </div>
    <div class="card-middle">Vanila BombSquad for Windows,ndroid</div>
    <card class="card-footer">
      <a href="<?php echo $download_link['mac']; ?>" download="file"><button> Download </button></a>
    </card>
    </div>
  </div>
</a>
<a href="#"  class="card-link">
  <div class="flex-item">
    <div class="card linux">
    <div class="img"> </div>
    <div class="card-header"> <h2>Linux</h2> </div>
    <div class="card-middle">Vanila BombSquad for Windows,ndroid</div>
    <div class="card-footer">    <a href="<?php echo $download_link['linux64']; ?>" download="file"><button> Linux 64 </button></a>
    <a href="<?php echo $download_link['linux32']; ?>" download="file"><button> Linux 32 </button></a></div>
    </div>
  </div>
</a>
<a href="#"  class="card-link">
  <div class="flex-item">
    <div class="card android">
    <div class="img"> </div>
    <div class="card-header"> <h2>Android</h2> </div>
    <div class="card-middle">Vanila BombSquad for Windows,ndroid</div>

    <div class="card-footer"><a  href="<?php echo $download_link['playstore_bs']; ?>" target="_blank" ><button> Play Store </button></a>
    <a href="<?php echo $download_link['android']; ?>"  ><button> Direct Download </button></a></div>
    </div>
  </div>
</a>

</div>
 -->

<!-- end of main and flex-container -->





<?php include 'inc/footer.php' ?>