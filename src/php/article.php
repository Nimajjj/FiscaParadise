<!DOCTYPE html>
<!-- yF4qqJuW7kd8Vhj -->


<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/article.css" defer>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <title>FiscaParadise - Article</title>
</head>

<body>

	<div id="nav">
		<ul id="left_nav">
  		<li> <a href="http://fiscaparadise.alwaysdata.net"><img id="logo" src="../../img/gold-ingots.png" alt="logo"></a> </li>
			<li>
				<ul>
					<li><h1 id="main_title">FiscaParadise</h1></li>
					<li><h4 id="slogan">La solution, le paradis ? C'est FiscaParadise® !</h4></li>
				</ul>
			</li>
		</ul>
		<ul id="right_nav">
  		<li><div class="nav_bt" onclick="location.href='http://fiscaparadise.alwaysdata.net'"><p>HOME</p> <div class="indicator"></div> </div></li>
			<li><div class="nav_bt" onclick="location.href=`https://fiscaparadise.alwaysdata.net/src/php/categorie.php?Categorie=ALL`"><p>Articles</p><div class="indicator"></div></div></li>
			<li><div class="nav_bt" onclick="location.href=`https://fiscaparadise.alwaysdata.net/src/php/categorie.php?Categorie=Revue`"><p>Revues</p><div class="indicator"></div></div></li>
			<li><div class="nav_bt" onclick="location.href=`https://fiscaparadise.alwaysdata.net/src/php/categorie.php?Categorie=Interview`"><p>Interviews</p><div class="indicator"></div></div></li>
			<li><div class="nav_bt" onclick="location.href=`https://fiscaparadise.alwaysdata.net/src/php/categorie.php?Categorie=Classement`"><p>Classements</p><div class="indicator"></div></div></li>
			<li><div class="nav_bt" onclick="location.href='https://fiscaparadise.alwaysdata.net/src/php/contact.php'"><p>Contact</p><div class="indicator"></div></div></li>
		</ul>
	</div>

	<?php
		include 'init.php';

		$id = $_GET['Article'];

		$request = "SELECT * FROM `articles_table` where `ID` = $id";
		$result = mysqli_query($sqlConnection, $request);

		if(!$result)  { echo "<br>Echec de l'affichage"; }
		else {
			$value = mysqli_fetch_array($result);
			echo '<div id="main">';
				echo '<div id="article">';
					echo '<ul id="article_ul">';
						echo '<li><h2 id="article_title" style="text-decoration: underline; text-decoration-color: #fb8122;">'.$value['Title'].'</h2></li>';
						echo '<li><img id="article_img" src="../../img/article/'.$value['ImgFile'].'" alt="img" style="height:75vh"></li>';
						echo '<li>';
							echo '<p id="intro" style="margin-top:1.5vh;">'.$value['Intro'].'</p>';
							echo '<p id="body" style="margin-top:1.5vh;">'.$value['Body'].'</p>';
							echo '<p id="conclusion" style="margin-top:1.5vh;">'.$value['Conclusion'].'</p>';
							echo '<div id="article_footer"><p id="date">Article écrit le '.$value['Date'].'</p><p id="author" style="margin-left: 0.5vw;"> par '.$value['Author'].'</p></div>';
						echo '</li>';
					echo '</ul>';
			echo '</div>';
		}
		mysqli_close($sqlConnection);
	 ?>

	 <div id="right_bar">

		 <div class="r_bar_block">
			 <form action="https://fiscaparadise.alwaysdata.net/src/php/recherche.php" method="get" id="searchForm">
				 <input type="text" name="search" id="search" placeholder="Recherche"/>
				 <input type="submit" name="searchSubmit" id="searchSubmit" value="Rechercher"/>
			 </form>
		 </div>
		 <div class="r_bar_block" id="r_bar_tendances">
			 <ul>
				 <li><p>Articles tendances:</p></li>
				 <?php
				 include './init.php';

				 $request = "SELECT * FROM `articles_table` ORDER BY `ID` DESC LIMIT 10";
				 $result = mysqli_query($sqlConnection, $request);

				 $count = 0;

				 while ( $count < 4) {
					 while ( $article = mysqli_fetch_array($result) ) {
						 echo "<li><a href=https://fiscaparadise.alwaysdata.net/src/php/article.php?Article=".$article['ID'].">".$article['Title']."</a></li>";
						 $count++;
						 if ($count < 4) {
							 break;
						 }
					 }
				 }

				 mysqli_close($sqlConnection);
					?>
			 </ul>
		 </div>

	 </div>

	</div>

  <div id="footer">
    <ul>

      <li>
        <ul>
          <li><p class="f_title">FiscaParadise</p></li>
          <li><a href="https://fiscaparadise.alwaysdata.net/src/php/contact.php">A propos de FP</a></li>
          <li><a href="https://fiscaparadise.alwaysdata.net/src/php/contact.php">Nous contacter</a></li>
        </ul>
      </li>

      <li>
        <ul>
          <li><p class="f_title">Auteurs</p></li>
          <li><a href="https://github.com/amaury13" target="_blank">DESBOURDES Amaury</a></li>
          <li><a href="https://github.com/Nimajjj" target="_blank">BORELLO Benjamin</a></li>
        </ul>
      </li>

      <li>
        <div id="f_right">
					<ul>
            <li> <a target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2FFiscaParadise.com%2F&amp;src=sdkpreparse', 'facebook','width=600,height=400')"> <img class="social_icon" src="../../img/facebook.png" alt="facebook"> </a> </li>
            <li> <a target="_blank" href="./mailDB.php"> <img class="social_icon" src="../../img/twitter.png" alt="twitter"> </a> </li>
            <li> <a target="_blank" href="#"> <img class="social_icon" src="../../img/google-plus.png" alt="google +"> </a> </li>
          </ul>
          <p>S'enregistrer à la newletter:</p>
          <form action="" method="post">
            <input type="email" name="email"/>
            <input type="submit" name="emailSubmit" id="emailSubmit"/>

            <?php
              function submitEmail($email)
              {
                include 'src/php/init.php';

                $mail = (string) $email;

                $request = "INSERT INTO `emails_table` (`email`) VALUES ('$email')";
                $result = mysqli_query($sqlConnection, $request);

                if(!$result)  { echo "<br>Echec de l insertion"; }
                mysqli_close($sqlConnection);
              }
              if(array_key_exists('emailSubmit',$_POST)){
                 submitEmail($_POST['email']);
              }
            ?>

          </form>
        </div>
      </li>

    </ul>
  </div>
</body>
</html>
