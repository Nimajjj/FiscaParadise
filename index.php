<!DOCTYPE html>
<!-- yF4qqJuW7kd8Vhj -->


<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="src/css/main.css">
  <link rel="stylesheet" type="text/css" href="src/css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
  <title>FiscaParadise - Article</title>
</head>

<body>

	<div id="nav">
		<ul id="left_nav">
  		<li><img id="logo" src="img/gold-ingots.png" alt="logo"></li>
  		<li><h1 id="main_title">FiscaParadise</h1></li>
		</ul>
		<ul id="right_nav">
  		<li><div class="nav_bt" onclick="location.href='http://fiscaparadise.alwaysdata.net'"><p id="home_bt">HOME</p></div></li>
  		<li><div class="nav_bt" onclick="location.href='http://fiscaparadise.alwaysdata.net/src/php/article.php'"><p>Articles</p></div></li>
  		<li><div class="nav_bt"><p>Guides</p></div></li>
  		<li><div class="nav_bt"><p>Contact</p></div></li>
		</ul>
	</div>

  <div id="main">

    <ul id="articles">
			<h2>Articles récents:</h2>
    	<li class="article_odd">
				<img src="img/article/gold.jpeg" alt="" class="article_img">
				<div class="article_content">
					<h3 class="article_title">Titre article odd</h3>
					<p class="article_intro">INTRO:
Mais ou pouvez-vous bien cacher tout votre or ?
Ceci est une introduction, je ne sais pas trop quoi ecrire mais bon voila faut bien faire quelque chose... Bla bla bl<span class="important">fugiat nulla pariatur</span>a bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla.<br>
Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. J'espere que ca rendra bien.</p>
				</div>
			</li>

			<li class="article_even">
				<div class="article_content">
					<h3 class="article_title">Titre article even</h3>
					<p class="article_intro">INTRO:
Mais ou pouvez-vous bien cacher tout votre or ?
Ceci est une introduction, je ne sais pas trop quoi ecrire mais bon voila faut bien faire quelque chose... Bla bla bl<span class="important">fugiat nulla pariatur</span>a bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla.<br>
Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. J'espere que ca rendra bien.</p>
				</div>
				<img src="img/article/plage.jpg" alt="" class="article_img">
			</li>

			<li class="article_odd">
				<img src="img/article/gold.jpeg" alt="" class="article_img">
				<div class="article_content">
					<h3 class="article_title">Titre article odd</h3>
					<p class="article_intro">INTRO:
Mais ou pouvez-vous bien cacher tout votre or ?
Ceci est une introduction, je ne sais pas trop quoi ecrire mais bon voila faut bien faire quelque chose... Bla bla bl<span class="important">fugiat nulla pariatur</span>a bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla.<br>
Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla. J'espere que ca rendra bien.</p>
				</div>
			</li>

    </ul>

    <div id="right_bar"></div>
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
            <li> <a target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2FFiscaParadise.com%2F&amp;src=sdkpreparse', 'facebook','width=600,height=400')"> <img class="social_icon" src="../img/facebook.png" alt="facebook"> </a> </li>
            <li> <a target="_blank" href="./src/php/mailDB.php"> <img class="social_icon" src="img/twitter.png" alt="twitter"> </a> </li>
            <li> <a target="_blank" href="#"> <img class="social_icon" src="img/google-plus.png" alt="google +"> </a> </li>
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
