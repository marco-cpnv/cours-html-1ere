<!DOCTYPE html>
<?php
/**
 * Juste un exemple de récupération des paramètres. Ce script affiche bêtement
 * tous les paramètres passés en POST.
 *
 * @author Christophe Lambercy <christophe.lambercy@cpnv.ch>
 * @date 2015-04-19
 * @license GPL
 */
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Vos données postées</title>
  </head>
  <body>
    <pre><code>
<?php 
foreach ($_POST as $key => $value) { 
    echo "$key = ";
    if (is_array($value)) {
        echo htmlspecialchars(join(', ', $value));
    } else {
        echo htmlspecialchars($value);
    }
    echo "<br>\n";
}
?>
    </code></pre>
  </body>
</html>
