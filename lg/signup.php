<?php
	include('conn.php');
	if(isset($_POST['susername'])){
		$username=$_POST['susername'];
		$nom=$_POST['nom'];
		$correo=$_POST['correo'];
		$tel=$_POST['tel'];
		$dir=$_POST['dir'];
		$neg=$_POST['neg'];
		$dneg=$_POST['dneg'];
		$password=$_POST['spassword'];

		$query=$conn->query("select * from cli where username='$username'");

		if ($query->num_rows>0){
			?>
  				<span>El nombre de usuario ya existe.</span>
  			<?php 
		}

		elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$username)){
			?>
  				<span style="font-size:11px;">Nombre de usuario no válido. No se permiten espacios ni caracteres especiales.</span>
  			<?php 
		}
		elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$password)){
			?>
  				<span style="font-size:11px;">Contraseña invalida. No se permiten espacios ni caracteres especiales.</span>
  			<?php 
		}
		else{
			$conn->query("insert into cli (username,nom, password, correo, tel, dir, neg, dneg) values ('$username','$nom', '$password','$correo','$tel','$dir','$neg','$dneg')");
			?>
  				<span>Regístrado con éxito.</span>
  			<?php 
		}
	}
?>