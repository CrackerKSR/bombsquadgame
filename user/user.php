<?php include_once 'inc/header.php'; ?>
<?php echo "string"; ?>
<center>
<div id="set">

<input type="button" name="signOUT" value="SIGN OUT" onclick="signOUT()">

<div class="flex-container">

  <a href="upload_mod.php" class="card-link">
    <div class="flex-item">
      <div class="card bs">
        <div class="img"> </div>
        <div class="card-header">
          <h2>UPLOAD MODS</h2>
        </div>
        <div class="card-middle"> I know you have some awesome mods. Sharing is caring</div>
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
          <h2>Upload ModPacks</h2>
        </div>
        <div class="card-middle"> What? there is one more new modpack? let me see </div>
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
          <h2>IDEA</h2>
        </div>
        <div class="card-middle"> Don't hesitate just tell me what should I do to make this site better</div>
        <div class="card-footer">
          <h3>OPEN</h3>
        </div>
      </div>
    </div>
  </a>

</div>
<!-- <input type="button" name="" value="Cookies " onclick="alert(document.cookie);"> -->


<!-- <h3 style="color: cyan;"> You are signed in  </h3>
<h1> Coming Soon !</h1>
<p> You will be able to upload mods, videos links, Server IPs, get notifications, much more</p>
<p> You can suggest your ideas on Facebook Message <a style="color: cyan; " href="https://www.facebook.com/Eric-Froemlings-Fans-1754300994609405/?eid=ARCrlh83fvEQKQnztnRwE83mCVgxRTaQPoq-pTVrar8nYauJ9Z6PZ-gxhDJ0aI08HvS9udBguaM6Pwzd">Eric Froemling's Fans </a> </p> -->


</div>
</center>

<script> 

firebase.auth().onAuthStateChanged(function(user) {
  var u, user;
  if (user) {
    // User is signed in.
     // console.log("signed IN ");
     user = firebase.auth().currentUser;
     u = JSON.stringify(user);

  } else {
    // User is signed in.
     // console.log("signed OUT ");
     user = firebase.auth().currentUser;
     u = JSON.stringify(user);

  }

      request = $.ajax({
           url: "demoC.php",
           type: "post",
           data: JSON.parse(u)
       });
      request.done(function (response, textStatus, jqXHR){
        // console.log(response);
          document.getElementById('set').innerHTML = response;
       });
      

});


function signOUT(){
        firebase.auth().signOut().then(function() {
            // console.log("sign out");
           request = $.ajax({
           url: "demoC.php",
           type: "post",
           data: JSON.parse(u)
            });
            request.done(function (response, textStatus, jqXHR){

            });
        }).catch(function(error) {
            console.log(error);
        });

}
function signIN(){

        var provider = new firebase.auth.GoogleAuthProvider();
        firebase.auth().signInWithPopup(provider).then(function(result) {
            var token = result.credential.accessToken;
            var  user = result.user;
        }).catch(function(error) {
            var errorCode = error.code;
            var errorMessage = error.message;
            var email = error.email;
            var credential = error.credential;
            firebase.auth().getRedirectResult().then(function(result) {
  if (result.credential) {
    // This gives you a Google Access Token. You can use it to access the Google API.
    var token = result.credential.accessToken;
    // ...
  }
  // The signed-in user info.
  var user = result.user;
}).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // The email of the user's account used.
  var email = error.email;
  // The firebase.auth.AuthCredential type that was used.
  var credential = error.credential;
  // ...
        });
       
}

</script>