<?php 
	include('conn.php');
	session_start();
	if(isset($_POST['username'])){
		$username=$_POST['username'];
		$password=($_POST['password']);
		

		$query=$conn->query("select * from ad where username='$username' and password='$password'");

		if ($query->num_rows>0){
			$row=$query->fetch_array();
			$_SESSION['user']=$row['userid']; 
		}
		else{
			?>
  				<span>Inicio de sesion Fallido.Usuario No Reconocido</span>
  			<?php 
		}
	}
?>