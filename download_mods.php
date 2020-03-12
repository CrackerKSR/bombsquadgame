<?php $title = 'Mods Doanload'; ?>
<?php include 'inc/header.php' ?>
<?php include 'fireinit.php'; ?>
<?php include 'inc/fromGit.php'; ?>

<p>for pc- Right click and 'save link as'. for mobile- touch and hold and save link as</p>
<p> User Uploaded Mods</p>
<?php if(!is_null($newCard)) : ?>
<div class="flex-container">
<?php  foreach ($newCard as $key => $value) { ?>
    <?php if ($value['flag'] == '1' ): ?>
    <div class="flex-item">
    <div class="card mods">
      <div class="img"> <img src="https://firebasestorage.googleapis.com/v0/b/xampp-ksr.appspot.com/o/images%2FBackground.png?alt=media&token=6fc58f2a-d2f4-4c2e-86c9-45ee900c418f"> </div>
      <div class="card-header">
        <h2> <?php echo ( $value['modName'] ); ?> </h2>
      </div>
      <div class="card-middle">
        <ul style="list-style: none;">
          <small>
          <li>Type: <?php echo ( $value['ffa']=='on')?"FFA":"" ; ?>  <?php echo ($value['team']=='on')?"team":"" ; ?> <?php echo ($value['team']=='on')?"TEAM":"" ; ?> </li>
          <li>Modder: <?php echo (!empty($value['modderName'])?$value['modderName']:"unknown" ); ?> </li>
          <li>Uploader: <?php echo (!empty($value['displayName'])?$value['displayName']:$value["uploaderName"] ); ?>  </small> </li>
        </ul>
      </div>
        <div class="card-footer">
        <a style="text-decoration:none; color: white;"  href="<?php echo $value['modFile']; ?>" download="file"><h3>Download</h3></a>
      
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php } ?> 

<?php else: ?>
  <h1> No Mods Available. </h1> 
<?php endif; ?> 
</div>
<hr>
<p> Github Mods </p>

<div class="flex-container">
<?php  foreach ($fileLink as $key => $value) { ?>
    <div class="flex-item">
    <div class="card mods">
      <div class="img"> <img src="https://firebasestorage.googleapis.com/v0/b/xampp-ksr.appspot.com/o/images%2FBackground.png?alt=media&token=6fc58f2a-d2f4-4c2e-86c9-45ee900c418f"> </div>
      <div class="card-header">
        <h2 id="modname"> <?php echo ( $fileName[$key] ); ?> </h2>
      </div>
      <div class="card-middle">
        <ul style="list-style: none;">
          <small>
          <li>Type: <small> N/a </small> </li>
          <li>Modder: <small> N/a </small> </li>
          <li>Uploader: <small> N/a </small> </li>
        </small>
        </ul>
      </div>
        <div class="card-footer">
  
        <a hidden  class="down" style="text-decoration:none; color: white;"  href="<?php echo $value; ?>" download="<?php echo $fileName[$key].'py';  ?>"><h3>Download</h3></a>
        </div>
      </div>
    </div>
<?php } ?> 
<!-- <script>

  
  $("div.btn").click(function(event) {
    event.preventDefault(); 
    var file = document.getElementById('file').innerHTML;
    var link = document.getElementById('link').innerHTML;

      request = $.ajax({
           url: "xyz.php",
           type: "post",
           data: {'file1':file,'link1':link} 
       });
      request.done(function (response, textStatus, jqXHR){
          console.log(response);
        
       });

});
</script> -->
<?php include 'inc/footer.php' ?>