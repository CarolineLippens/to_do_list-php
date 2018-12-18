<?php
$html1 = "";



foreach ($parsed_json as $key => $value) {
    if($value["statut"] == false) {
        $html1 .= "<div class=col-sm-12 id=containers>
        <input type=checkbox name=sujet value=". $key . ">
        <label for=autre>".$value["tache"] ."</label>
        </div>";
    } else if($value["statut"] == true){
       
    }
    
  //  foreach ($value as $value2) {
       
        /*
        if (isset($_POST['sujet'])) {

          }
          else {
            $html1 .= "<div class=col-sm-12 id=containers>
            <input type=checkbox name=sujet>
            <label for=autre>".$value2."</label>
            </div>";
          } */
      //  }    
    }  

    $html2="";
    foreach ($parsed_json as $key => $value) {
        
            if($value["statut"] == true) {
                $html2 .= "<div class=col-sm-12 id=containers>
                <input type=checkbox name=sujet value=". $key . " >
                <label for=autre>".$value["tache"] ."</label>
                </div>";
              }
             else if($value["statut"] == false){
                
             
            }
        }  
?>