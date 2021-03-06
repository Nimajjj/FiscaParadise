<!DOCTYPE html>
<!-- yF4qqJuW7kd8Vhj -->


<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<script type="text/javascript" src="../js/index.js" defer></script>


  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <title>FiscaParadise - Contact</title>
</head>

<body>

	<div id="nav">
		<ul id="left_nav">
  		<li> <a href="http://fiscaparadise.alwaysdata.net"><img id="logo" src="../../img/gold-ingots.png" alt="logo"></a> </li>
  		<li>
				<ul>
					<li><h1 id="main_title">FiscaParadise</h1></li>
					<li><h4 id="slogan">La solution, le paradis ? C'est FiscaParadise┬« !</h4></li>
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

  <div id="main" style="margin-bottom: 23vh;">
		<h2 style="text-decoration: underline; text-decoration-color: #fb8122; font-size: 32px; margin-bottom: 1vh;">Qui sommes nous ?</h2>
		<p style="margin-bottom: 2vh;">
			Nous sommes FiscaParadise ! <br>
			Le seul et unique blog francophone qui vous expliquera comment d├ęplacer votre fiscalit├ę au soleil. <br>
			Notre ├ęquipe de r├ędaction est constitu├ęe uniquement de professionnels de la fiscalit├ę internationale. <br>
			Notre si├Ęge bas├ę ├á Berne en Suisse nous permet de vous conseiller en toute l├ęgalit├ę pour vous apprendre ├á bien niquer votre pays natal. <br>
			Vous voulez participer ├á la prochaine crise ├ęconomique de votre pays en d├ęfiscalisant tout vos revenus ? <br>
			Alors suivez nos conseil ! La solution, le paradis ? C'est FiscaParadise┬« !
		</p>

		<h2 style="text-decoration: underline; text-decoration-color: #fb8122; font-size: 32px; margin-bottom: 1vh;">Nous contacter :</h2>
		<p>Email : fiscaparadise@gmail.com</p>
		<p>Telephone : 06.66.66.66.66</p>
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
            <li> <a target="_blank" href="../php/mailDB.php"> <img class="social_icon" src="../../img/twitter.png" alt="twitter"> </a> </li>
            <li> <a target="_blank" href="#"> <img class="social_icon" src="../../img/google-plus.png" alt="google +"> </a> </li>
          </ul>
          <p>S'enregistrer ├á la newletter:</p>
          <form action="" method="post">
            <input type="email" name="email" placeholder="Entrez votre email"/>
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
