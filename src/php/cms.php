<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/cms.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>CMS - Article Creation</title>
  </head>
  <body>
    <form action="" method="post">
      <h2>Article creation:</h2>

      <label for="title">Article title:</label><br>
      <textarea id="title" name="title" rows="1" cols="40"></textarea><br>
      <label for="intro">Article intro:</label><br>
      <textarea id="intro" name="intro" rows="10" cols="75"></textarea><br>
      <label for="body">Article body:</label><br>
      <textarea id="body" name="body" rows="20" cols="75"></textarea><br>
      <label for="conclusion">Article conclusion:</label><br>
      <textarea id="conclusion" name="conclusion" rows="10" cols="75"></textarea><br>
      <label for="author">Author:</label><br>
      <textarea name="author" rows="1" cols="40"></textarea><br>
      <label for="date">Creation date:</label>
      <input type="date" id="date" name="date" style="margin-bottom: 2vh;">
      <label for="img">Image file name:</label><br>
      <textarea name="img" rows="1" cols="10"></textarea><br>
      <input type="submit" name="Submit" value="Submit">
    </form>

    <?php
      function submitArticle($a) {
        include 'init.php';

        $date = $a['date'];
        $title = $a['title'];
        $img = $a['img'];
        $intro = $a['intro'];
        $body = $a['body'];
        $conclusion = $a['conclusion'];
        $author = $a['author'];

        $request = "INSERT INTO `articles_table` (`ID`, `Date`, `Title`, `ImgFile`, `Intro`, `Body`, `Conclusion`, `Author`) VALUES (NULL, '$date', '$title', '$img', '$intro', '$body', '$conclusion', '$author')";
        $result = mysqli_query($sqlConnection, $request);

      	if(!$result){ echo "Insertion echoué"; }

        mysqli_close($sqlConnection);
      }

      if(array_key_exists('Submit',$_POST)){
        submitArticle($_POST);
      }
     ?>
  </body>
</html>
