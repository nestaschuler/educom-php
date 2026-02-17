<!DOCTYPE html>
<html>
    <body>

    <!-- Ik heb alle codes hier in verwerkt en toen verwijderd en weer de nieuwe verwerkt, dus in deze is niet veel te zien maar de PHP tutorial heb ik dus doorlopen-->

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
}}
?>
    </body>
</html>