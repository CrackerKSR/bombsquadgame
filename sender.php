<?php include_once 'inc/header.php'; ?>


<?php if(isset($_POST['submit'])) : ?>


<script>


var modName 	= 	"<?php echo($_POST['modname']); ?>";
var modderName  = 	"<?php echo($_POST['moddername']); ?>";

var ffa 		=	"<?php echo( isset($_POST['ffa']) ? $_POST['ffa'] : 'off' ); ?>";
var team 		=	"<?php echo( isset($_POST['team']) ? $_POST['team'] : 'off' ); ?>";
var coop 		=	"<?php echo( isset($_POST['coop']) ? $_POST['coop'] : 'off' ); ?>";

var modFile 	=	"<?php echo( $_POST['modURL'] ); ?>";
var modPhoto 	=	"<?php echo( isset($_POST['imgURL']) ? $_POST['imgURL'] : 'https://i.ibb.co/C90gYv3/BS-icona.png' ); ?>";


var displayName 	=	"<?php echo( $_SESSION['name'] ); ?>";
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
  setTimeout (delay,5000);
  function delay(){
  	window.location = 'm_user.php';
  }
  
</script>

<?php endif; ?>



<?php include 'inc/footer.php'; ?>