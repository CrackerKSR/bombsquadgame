

<?php 
	if ( isset( $_SESSION['elite2'] ) and $_SESSION['elite2'] == 'elite')  {
		
		include_once 'user/user.php';
		
		
	}else{

		include_once 'user/nouser.php';

		
	}
 ?>




<?php include 'inc/footer.php'; ?>
