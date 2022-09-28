<?php
    include('variables.php'); 
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    $result['name'] = isset($_POST['user_name']) ? test_input($_POST['user_name']) : '';
    $result['surname'] = isset($_POST['user_surname']) ? test_input($_POST['user_surname']) : '';
    $result['sujet'] = isset($_POST['sujet'])&&isset($sujets[test_input($_POST['sujet'])]) ? $sujets[$_POST['sujet']] : '';
    $result['email'] = isset($_POST['user_email']) ? test_input($_POST['user_email']) : '';
    $result['phone'] = isset($_POST['phone']) ? test_input($_POST['phone']): '';
    $result['message'] = isset($_POST['user_message']) ? test_input($_POST['user_message']) : '';

    echo '<link rel="stylesheet" href="styles/form.css">';
    if (in_array('', $result)) {
        $messageThanks = "Tous les champs sont obligatoires";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $result['name'])) {
        $messageThanks = "Juste letters et espace est accepte pour prenom";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $result['surname'])) {
        $messageThanks = "Juste letters et espace est accepte pour nom";
    } elseif (!filter_var($result['email'], FILTER_VALIDATE_EMAIL)) {
        $messageThanks = "Invalid email format";     
    } else {    
        $messageThanks =  "Merci <b>" . $result['name'] . " " .$result['surname'] . "</b> de nous avoir contactés 
        à propos de <i>" . $result['sujet'] . "</i>.<br/>
        Un de nos conseiller vous contactera soit à l’adresse <i>" . $result['email'] . 
        "</i> ou par téléphone au " . $result['phone'] . " dans les plus brefs délais pour traiter votre demande : <b>" . 
        $result['message'] . "</b>";
    }
    echo "<div class='message'><p>" . $messageThanks . "</p></div>";