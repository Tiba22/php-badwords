<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP BadWord</title>
</head>

<style>
  * {
    width: 80%;
    margin: 100px auto;
  }
</style>
<body>

  <?php
  // Creare una variabile con un paragrafo di testo.
  // Visualizzare a schermo il paragrafo con la relativa
  // lunghezza e sostituire la badword passata in GET con
  //  tre *.

  $phrase = '<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1>';

  $badword = $_GET['badword'];

  $correctedPhrase = str_replace($badword, '***', $phrase);

  echo strlen ($correctedPhrase);
  echo $correctedPhrase;
  ?>

</body>
</html>
