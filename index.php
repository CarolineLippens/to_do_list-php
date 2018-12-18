<?php
$tache = "";
$tacheErr= "";

$result = filter_input(INPUT_POST,'tache', FILTER_SANITIZE_STRING);

if(isset($_POST['todo'])) {
    
    if (empty($_POST["tache"])) {
        echo $tacheErr = "Votre tâche est requise";
    } else { 
            $url = 'to-do.json'; //l'url de notre doc json
            $data = file_get_contents($url); // ouvre le url
            $arrayJson = json_decode($data, true);
            array_push($arrayJson,['tache'=>$result, "statut" => false]);
            $fini = json_encode($arrayJson, JSON_FORCE_OBJECT,  JSON_UNESCAPED_UNICODE ); //met dans le doc json
            file_put_contents($url, $fini);//close le doc json
            
           // var_dump($fini);
    }
}




$hello=file_get_contents('to-do.json');
$parsed_json=json_decode($hello, true);

if(isset($_POST['sujet'])) {
    $id = $_POST["sujet"];
    $parsed_json[$id]["statut"] = true; 
    print_r($parsed_json[$id]);

    $fini = json_encode($parsed_json, JSON_FORCE_OBJECT,  JSON_UNESCAPED_UNICODE ); //met dans le doc json
    file_put_contents("to-do.json", $fini);//close le doc json
}




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>to_do list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="to_do.css">
    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>


    </div>
</div>

<div class="container-fluid ">
        <div class="container d-flex justify-content-center">
            <div class="row">
    <div class="col-md-12">
<label for="sujet" class="col-md-12"><h1>To do list</h1> <h2> à faire</h2></label>
</div>
    </div>
        </div>
            </div>

    <div class="container-fluid">
            <div class="container d-flex justify-content-center">
               <div class="row">

    <form method="post" action="#">
    <?php require("contenu.php");
        echo $html1;
                ?>
    </div>
        </div>
                </div>
        <div class="container-fluid " >
                <div class="container d-flex justify-content-center">
                    <div class="row ">
                        <div class="col-md-6">
        <input type="submit" class="btn btn-primary" value="Fini!" name="finish">
        
        </div>
            </div>
                </div>
                    </div>
                    <div class="container-fluid ">
        <div class="container d-flex justify-content-center">
            <div class="row">
    <div class="col-md-12">
<label for="sujet" class="col-md-12"><h2>Archives</h2></label>
</div>
    </div>
        </div>
            </div>
            <div class="container-fluid">
                    <div class="container d-flex justify-content-center">
                        <div class="row">
            <?php 

require("contenu.php");
echo $html2;
                ?>
        </div>
            </div>
                </div>
        
        <div class="container-fluid ">
                <div class="container d-flex justify-content-center">
                    
                <div class="col-md-5 ">
                    </form>
                    <form method="post" action="#">
                <h2>ajouter une tache</h2>
                <input type="textarea" name="tache" class="form-control " placeholder="Votre nouvelle tache ici" >
                <input type="submit" class="btn btn-primary col-md-6 btnbas" value="valider la tache" name="todo">
                </div>
                </div>                               
                </div>

                    </form>

                </body>
</html>