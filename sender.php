<?php include_once 'inc/header.php'; ?>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 80px;
  height: 80px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

<?php if(isset($_POST['submit'])) : ?>


<script>


var modName 	= 	"<?php echo($_POST['modname']); ?>";
var modderName  = 	"<?php echo($_POST['moddername']); ?>";

var ffa 		=	"<?php echo( isset($_POST['ffa']) ? $_POST['ffa'] : 'off' ); ?>";
var team 		=	"<?php echo( isset($_POST['team']) ? $_POST['team'] : 'off' ); ?>";
var coop 		=	"<?php echo( isset($_POST['coop']) ? $_POST['coop'] : 'off' ); ?>";

var modFile 	=	"<?php echo( $_POST['modURL'] ); ?>";
var modPhoto 	=	"<?php echo( isset($_POST['imgURL']) ? $_POST['imgURL'] : 'https://i.ibb.co/C90gYv3/BS-icona.png' ); ?>";

var uploaderName  = "<?php echo( $_POST['uploadername'] ); ?>";
var displayName   = "<?php echo( $_SESSION['name'] ); ?>";
var uid 			=	"<?php echo( $_SESSION['uid'] ); ?>";
var userPhoto 		=	"<?php echo( $_SESSION['dp'] ); ?>";
var userMail 		=	"<?php echo( $_SESSION['email'] ); ?>";

var d = new Date();
console.log("assigned");
// console.log(x);
  // A post entry.
  var uploadMod = {
      modName: modName,
      modderName: modderName,
      modFile:modFile,
      modPhoto:modPhoto,
      ffa: ffa,
      team: team,
      coop: coop,
      uploaderName:uploaderName,
      displayName: displayName,
      userPhoto: userPhoto,
      userMail:userMail,
      uid: uid,
      date: d,
      flag:1
    };

  // Get a key for a new Post.
  var newPostKey = firebase.database().ref().child('mods').push().key;

  // Write the new post's data simultaneously in the posts list and the user's post list.
  var updates = {};
  updates['/mods/' + newPostKey] = uploadMod;
  updates['/user-upload/' + uid + '/' + newPostKey] = uploadMod;

  var x = firebase.database().ref().update(updates);
  console.log(x);
  document.write("<h1> Please Waite...! </h1>");
  document.write("<div class='loader'> </div>");

  setTimeout (delay,5000);
  function delay(){
  	window.location = 'm_user.php';

  }
  
</script> 

<?php endif; ?>



<?php include 'inc/footer.php'; ?>