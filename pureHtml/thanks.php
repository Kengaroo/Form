<?php
    include('variables.php'); 
    echo '<link rel="stylesheet" href="styles/form.css">';
    echo "<p>
    Merci <b>" . $_POST['user_name'] . " " .$_POST['user_surname'] . "</b> de nous avoir contactés 
    à propos de <i>" . $sujets[$_POST['sujet']] . "</i><br/>
    Un de nos conseiller vous contactera soit à l’adresse <i>" . $_POST['user_email'] . 
    "</i> ou par téléphone au " . $_POST['phone'] . " dans les plus brefs délais pour traiter votre demande : <b>" . 
    $_POST['user_message'] . "</b></p>";