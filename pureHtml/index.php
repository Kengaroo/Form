<?php
require_once'_connect.php';
$pdo = new \PDO(DB, USER, PASS);
$data = [];
$strAdd = '';
$strParam = '';
$errorMessage = [];
$strLength = 45;
if (isset($_POST) && !empty($_POST)) {
    foreach($_POST as $key => $value) {
        if (!$value) {
            $errorMessage[$key] = $key . " shouldn't be empty<br/>";
        } else if (strlen($value) > $strLength) {
            $errorMessage[$key] = $key . " shouldn't be longer than " . $strLength . "<br/>";
        } 
        if (empty($errorMessage)) {
            $strAdd .= $key.',';
            $strParam .= ":" . $key . ",";
            $data[$key] = $value;
        } else {
            break;
        }        
    }
    
    if (empty($errorMessage)) {
        $strAdd = trim($strAdd, ',');
        $strParam = trim($strParam, ',');
        $queryAdd = "INSERT INTO friend (" . $strAdd . ") VALUES (" . $strParam .")"; 
        $statement = $pdo->prepare($queryAdd);
        foreach($_POST as $key => $value) {
            $statement->bindValue(':' . $key, $value, \PDO::PARAM_STR);
        }
        $statement->execute();
    }
}

$query = "SELECT * FROM friend";
$statement= $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/form.css">
    <title>Mes amis</title>
</head>

<body>    
    <header>
        <h1>Amis</h1>
    </header>
    <main>
        <section>
            <h2>Mes amis actuels</h2>            
            <?php 
            foreach($friends as $friend) : 
                echo $friend["id"] . ". " . $friend["firstname"] . " " . $friend["lastname"] . "<br/>";            
            endforeach;            
            ?>
        </section>
        <secton>
            <h2>Ajoute ami(e)</h2>     
            <?php 
            if (!empty($errorMessage)) {
                echo "<div class='error'>" . implode('', $errorMessage) . "</div>";
            }
            ?>       
                <form action="" method="post">
                    <div>
                        <label for="prenom">Prenom :</label>
                        <input type="text" id="prenom" name="firstname">
                    </div> 
                    <div>
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="lastname">
                    </div>                       
                    <div class="button">
                        <button type="submit">Envoyer votre message</button>
                    </div>
                </form>            
        </section>        
    </main>
    <footer>
        <h1>2022 Wilders</h1>
    </footer>
    <script src="script.js"></script>
</body>
</html>