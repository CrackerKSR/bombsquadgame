<?php include_once 'inc/header.php'; ?>

<center>
<div id="set">
<input type="button" name="signIN" value="SIGN IN" onclick="signIN()">


<!-- <input type="button" name="" value="Cookies " onclick="alert(document.cookie);"> -->


<h3 style="color: yellow;"> Please Sign in </h3>
<h1> Coming Soon !</h1>
<p> You will be able to upload mods, videos links, Server IPs, get notifications, much more</p>
<p> You can suggest your ideas on Facebook Message <a style="color: cyan; " href="https://www.facebook.com/Eric-Froemlings-Fans-1754300994609405/?eid=ARCrlh83fvEQKQnztnRwE83mCVgxRTaQPoq-pTVrar8nYauJ9Z6PZ-gxhDJ0aI08HvS9udBguaM6Pwzd">Eric Froemling's Fans </a> </p>

  </div>
</center>
<script> 


firebase.auth().onAuthStateChanged(function(user) {
  var u, user;
  if (user) {
    // User is signed in.
     console.log("signed IN ");
     user = firebase.auth().currentUser;
     u = JSON.stringify(user);
    
     
  } else {
    // User is signed in.
     console.log("signed out ");
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
         // window.replace = 'http://localhost/struct/m_user.php' ;
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
        // console.log(response);
        
        // window.replace = 'http://localhost/struct/m_user.php' ;
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
// window.replace = 'http://localhost/struct/m_user.php' ;
           
        }).catch(function(error) {
            var errorCode = error.code;
            var errorMessage = error.message;
            var email = error.email;
            var credential = error.credential;
        });
       
}


</script>