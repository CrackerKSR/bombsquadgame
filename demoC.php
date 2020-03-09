<?php include_once 'inc/session.php' ?>

<?php 
        // setcookie("user", "", time() - 3600,'/'); //path is neccesory for set or delete
        // setcookie("elite", "elite", time() + (86400 * 30), "/");

if($_SERVER['REQUEST_METHOD'] == "POST"){
	if ( !empty($_POST) ) {
		setcookie("elite", "elite", time() + (86400 * 30), "/");
		$_SESSION['elite_session'] = 'true';
		$_SESSION['dp'] = $_POST['photoURL'];
		$_SESSION['name'] =  $_POST['displayName'];
		$_SESSION['uid'] =  $_POST['uid'];
		$_SESSION['email'] =  $_POST['email'];

		echo (file_get_contents('user/user.php'));
	} else {
		setcookie("elite", "", time() + time() - 3600, "/");
		session_unset();
		echo (file_get_contents('user/nouser.php'));
		
	}
}
else{
	// echo "no posted";

}


?>
