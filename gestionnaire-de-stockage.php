<html>
        <head>
                <meta charset="utf-8">
                <!-- importer le fichier de style -->
                <link rel="stylesheet" href="../../../style/home_style.css" media="screen" type="text/css" />
        </head>
	<header>
		<table id="header_bar">
			<th><H1 id="home_text">GESTIONNAIRE DE STOCKAGE</H1></th>
			<th><a id="bouton_deconnexion" href="deconnexion.php"><input type="button" value="deconnexion"></a></th>
		</table>
        </header>
        <body>
<?php

	$user = $_COOKIE['iris_user'];

	if($user == ""){
		header('Location: login.php');
	}

	/*$db_username = 'login_iris_user';
    	$db_password = '';
    	$db_name     = 'iris';
    	$db_host     = 'localhost';
    	$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           	or die('could not connect to database');

	$requete_user_rights = " select * from iris_plugin_access where user_name = \"$user\"; ";//La requete permettant de récuperer les droits de l'utilsateur qui se connecte
        $result_user_rights = mysqli_query($db,$requete_user_rights); //On récupère le résultat de la requête qui contient les droits de l'utilisateur qui se connecte
	$adapted_result_user_rights = mysqli_fetch_array($result_user_rights, MYSQLI_NUM);//On positionne les valeurs résultantes dans un tableau;
	
	$requete_plugin_image = "select * from parametres_plugin_name;"; //la requete permettant de récuperer le nombre de plugins et le nom des différents plugins
	$result_plugin_image = mysqli_query($db,$requete_plugin_image);//Pareille que la requête précédente
	 
	echo "</br>";

	//On récupère le nombre de plugins existant
	$requete_nombre_plugins = "select COUNT(*) from parametres_plugin_name;";
	$result_nombre_plugins = mysqli_query($db,$requete_nombre_plugins);
	$adapted_result_nombre_plugins = mysqli_fetch_array($result_nombre_plugins, MYSQLI_NUM);

	for($i = 0; $i < $adapted_result_nombre_plugins[0]; $i++){
		
		$adapted_result_plugin_image = mysqli_fetch_array($result_plugin_image, MYSQLI_NUM);

		$name = $adapted_result_plugin_image[0];
		//$activate = $adapted_result_user_rights[$i+1];

		//if($activate == "1"){
			echo "<a href=\"$name/$name.php\">";
			echo "<img id=\"parametres_img\" src=\"../plugin_logo/logo_$name.png\">";
			echo "</a>";
		//}
	}

	mysqli_close($db);
	*/
?>
	</body>
</html>

