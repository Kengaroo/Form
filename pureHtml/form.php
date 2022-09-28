<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="styles/form.css">
</head>

<body>
  <form action="thanks.php" method="post">
    <div class="inner">
      <div class="field">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_surname">
      </div>
      <div class="field">
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="user_name">
      </div>
      <div class="field">
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
      </div>
      <div class="field">
        <label for="phone">Telephone :</label>
        <input type="tel" id="phone" name="phone">
      </div>
      <div class="field">
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
      </div>
      <div class="field">
        <label for="sujet">Sujet :</label>
        <select id="sujet" name="sujet">        
          <?php
          include('variables.php');
          foreach ($sujets as $k => $sujet) {
            echo 
            '<option></option>
            <option value="' . $k . '">' . $sujet . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="button field">
        <button type="submit">Envoyer votre message</button>
      </div>
    </div>
  </form>
</body>

</html>