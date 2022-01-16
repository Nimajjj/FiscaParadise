<!DOCTYPE html>
<!-- yF4qqJuW7kd8Vhj -->


<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<script type="text/javascript" src="../js/index.js"></script>


  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">

	<?php
		$categorie = $_GET['Categorie'];
		if ($categorie == 'ALL') {
			echo '<title>FiscaParadise - Tous Les Articles</title>' ;
		} else {
			echo '<title>FiscaParadise - '.$categorie.'s</title>' ;
		}

	 ?>
</head>

<body>

	<div id="nav">
		<ul id="left_nav">
  		<li><img id="logo" src="../../img/gold-ingots.png" alt="logo"></li>
  		<li>
				<ul>
					<li><h1 id="main_title">FiscaParadise</h1></li>
					<li><h4 id="slogan">La moula = <3</h4></li>
				</ul>

			</li>
		</ul>
		<ul id="right_nav">
  		<li><div class="nav_bt" onclick="location.href='http://fiscaparadise.alwaysdata.net'"><p>HOME</p> <div class="indicator"></div> </div></li>
			<li><div class="nav_bt" onclick="location.href=`https://fiscaparadise.alwaysdata.net/src/php/categorie.php?Categorie=ALL`"><p>Articles</p><div class="indicator"></div></div></li>
			<li><div class="nav_bt" onclick="location.href=`https://fiscaparadise.alwaysdata.net/src/php/categorie.php?Categorie=Revue`"><p>Revues</p><div class="indicator"></div></div></li>
			<li><div class="nav_bt" onclick="location.href=`https://fiscaparadise.alwaysdata.net/src/php/categorie.php?Categorie=Interview`"><p>Interviews</p><div class="indicator"></div></div></li>
			<li><div class="nav_bt" onclick="location.href=`https://fiscaparadise.alwaysdata.net/src/php/categorie.php?Categorie=Classement`"><p>Classements</p><div class="indicator"></div></div></li>
  		<li><div class="nav_bt"><p>Contact</p><div class="indicator"></div></div></li>
		</ul>
	</div>

  <div id="main">

		<div id="main_main">

	    <ul id="articles">

				<?php
					include './init.php';

					$categorie = $_GET['Categorie'];

					$request = "SELECT * FROM `articles_table` ORDER BY `ID` DESC LIMIT 10";
					$result = mysqli_query($sqlConnection, $request);

					if ($categorie != "ALL") {
						echo '<h2 style="text-decoration: underline; text-decoration-color: #fb8122;">'.$categorie.'s:</h2><br/>';
					} else {
						echo '<h2 style="text-decoration: underline; text-decoration-color: #fb8122;">Tous les articles:</h2><br/>';
					}


					while ( $article = mysqli_fetch_array($result) ) {
						if ($article["Categorie"] != $categorie && $categorie != "ALL") {
							continue;
						}
						echo '<li class="article" onclick="location.href=`./article.php?Article='.$article['ID'].'`">';
							echo '<div>';
								echo '<img src="../../img/article/'.$article['ImgFile'].'" alt="" class="article_img">';
								echo '<p style="margin-right: 1vw;">'.$article['Date'].' - '.$article['Author'].'</p>';
							echo '</div>';
							echo '<div class="article_content">';
								echo '<h3 class="article_title">'.$article['Title'].'</h3>';
								echo '<p class="article_intro">'.$article['Intro'].'</p>';
							echo '</div>';
						echo '</li>';
					}

					mysqli_close($sqlConnection);
				 ?>

	    </ul>
		</div>



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
          <li><a href="#">A propos de FP</a></li>
          <li><a href="#">Nous contacter</a></li>
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
