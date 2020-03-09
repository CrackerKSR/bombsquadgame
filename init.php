<?php include 'inc/header.php'; ?>
<input type="button" name="" onclick="google()" value="sign up G">
<input type="button" name="" onclick="facebook()" value="sign up fb">
<input type="button" name="" onclick="out()" value="sign out">
<input type="button" name="" onclick="check()" value="Check User">
<input type="button" name="" onclick="veri()" value="Verify">
<input type="button" name="" onclick="check_storage()" value="storage">

<input type="file" name="" id="a" value="upload" accept="image/jpg">



<!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->
<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.8.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.8.2/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.8.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.8.2/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.8.2/firebase-storage.js"></script>

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



    /////

    var fileButton = document.getElementById('a');
    fileButton.addEventListener('change', function(e) {
        var file = e.target.files[0];
        console.log(file);
        // Create a root reference
        var storageRef = firebase.storage().ref('images/' + file.name);

        storageRef.put(file);
    });
    /////

    // L O G I N starts
    // google   
    function google() {
        var provider = new firebase.auth.GoogleAuthProvider();
        firebase.auth().signInWithPopup(provider).then(function(result) {
            var token = result.credential.accessToken;
            var user = result.user;
            document.getElementById('prof').src = firebase.auth().currentUser.photoURL;
            document.getElementById('fig').innerHTML = user['displayName'];
        }).catch(function(error) {
            var errorCode = error.code;
            var errorMessage = error.message;
            var email = error.email;
            var credential = error.credential;
        });
    }

    // L O G I N end

    out = () => {
        firebase.auth().signOut().then(function() {
            console.log("sign out");
        }).catch(function(error) {
            console.log(error);
        });
    }

    check = () => {
        var user = firebase.auth().currentUser;
        console.log(user);
        if (user != null) {
            user.providerData.forEach(function(profile) {
                console.log("  Sign-in provider: " + profile.providerId);
                console.log("  Provider-specific UID: " + profile.uid);
                console.log("  Name: " + profile.displayName);
                console.log("  Email: " + profile.email);
                console.log("  Photo URL: " + profile.photoURL);
                console.log("  emailVerifiedL: " + user.emailVerified);

            });
        }

    }

    function veri() {
        var user = firebase.auth().currentUser;

        user.sendEmailVerification().then(function() {
            console.log("Email sent.");
        }).catch(function(error) {
            console.log("An error happened.");
        });
    }
</script>
<?php include 'inc/footer.php'; ?>