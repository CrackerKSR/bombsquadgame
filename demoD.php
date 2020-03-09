<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">

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

        var user = firebase.auth().currentUser;
		
        var pic, mail;
        if (user != null) {
            user.providerData.forEach(function(profile) {

              mail = profile.email;
              pic =  profile.photoURL;
              console.log("kishor jena");
              console.log(pic);
              document.cookie = "username="+pic+"; expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/";
            });
          
        }
</script>
</body>
</html>