<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
  $parola = $_GET["parola"];
  $paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $paragrafoModificato = str_replace($parola, "***", $paragrafo);
?>
<p><?php echo $paragrafoModificato ?></p>
<h3>Il paragrafo è lungo <?php echo strlen($paragrafo)?> caratteri</h3>
