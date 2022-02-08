<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Emails DB</title>
  </head>
  <body>
    <h1>DB of emails registered for newsletter</h1>
    <h2>Only for test purpose, get out of here...</h2>
    <table>
      <tr style="display: flex; flex-direction: column;">
        <?php
          include 'init.php';

          $request = "SELECT * FROM `emails_table`";
  				$result = mysqli_query($sqlConnection, $request);

          if(!$result)  { echo "<br>Echec de l insertion"; }

          while ( $value = mysqli_fetch_array($result) ){
            echo "<td>".$value['email']."</td>";
          }

          mysqli_close($sqlConnection);
         ?>
      </tr>
    </table>
  </body>
</html>
