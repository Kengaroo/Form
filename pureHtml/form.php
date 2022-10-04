<?php
require_once'_connect.php';
$pdo = new \PDO(DB, USER, PASS);
$query = "SELECT * FROM friend";
$statement= $pdo->query($query);
$friends = $statement->fetchAll();
foreach ($friends as $friend) {
  echo '<pre>';
  print_r($friend);
  echo '</pre>';
}
$firstname = "Nata"; 

$lastname = "Ne";


$query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
$statement = $pdo->prepare($query);
$statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);

$statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
$statement->execute();


$friends = $statement->fetchAll();
foreach ($friends as $friend) {
  echo '<pre>';
  print_r($friend);
  echo '</pre>';
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="styles/form.css">
</head>

<body>
  <form action="thanks.php" method="post">
    <div>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="user_surname">
    </div>
    <div>
      <label for="prenom">Prenom :</label>
      <input type="text" id="prenom" name="user_name">
    </div>
    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="user_email">
    </div>
    <div>
      <label for="phone">Telephone :</label>
      <input type="tel" id="phone" name="phone">
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="user_message"></textarea>
    </div>
    <div>
      <label for="sujet">Sujet :</label>
      <select id="sujet" name="sujet">        
        <?php
        include('variables.php');
        foreach ($sujets as $k => $sujet) {
          echo '<option value="' . $k . '">' . $sujet . '</option>';
        }
        ?>
      </select>
    </div>
    <div class="button">
      <button type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>

</html>