
<h1>Inserire la parola da censurare nel parametro ?word=[PAROLA] nell'URL</h1>

<?php
  $txt = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $len = strlen($txt);
  echo $len;
  echo "<br>";

  $val = $_GET['word'];

  echo str_replace($val, "***", $txt);

 ?>
