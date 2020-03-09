<?php $title = 'Mods Doanload'; ?>
<?php include 'inc/header.php' ?>
<?php require 'fireinit.php'; ?>

<h2> COMING SOON !</h2>
<h5> You can download and upload mods here </h5>
<p>*this is sample mod card </p>
<div class="flex-container">
<?php  foreach ($newCard as $key => $value) { ?>
  <div class="flex-item">
    <div class="card mods">
      <div class="img"> <img src="<?php echo (isset($value['imgFile'])? $value['imgFile'] :'https://i.ibb.co/C90gYv3/BS-icona.png') ; ?>"> </div>
      <div class="card-header">
        <h2> <?php echo (isset($value['modName'])? $value['modName'] :'untitled') ; ?> </h2>
      </div>
      <div class="card-middle">
        <ul style="list-style: none;">
          <li>Type: <?php echo ( $value['ffa']=='on')?"FFA":"" ; ?>  <?php echo ($value['team']=='on')?"team":"" ; ?> <?php echo ($value['team']=='on')?"TEAM":"" ; ?> </li>
          <li><?php echo (isset($value['modderName'])?$value['modderName']:"unknown" ); ?> </li>
          <li><small>Uploader: <?php echo (isset($value['displayName'])?$value['displayName']:"unknown" ); ?>  </small> </li>
        </ul>
      </div>
      <div class="card-footer">
        <a download href="<?php echo $value['modFile'];  ?>"><h3>Download</h3></a>
      </div>
    </div>
  </div>
 <?php } ?> 

</div>

<?php include 'inc/footer.php' ?>