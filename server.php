<?php

require __DIR__ .'/partials/template/database.php'; 
header('Content-Type: application/json');


if(!empty($_GET["listAuthor"])){
    $listAuthor = $_GET["listAuthor"];
    $authors=[];
     if($listAuthor == true) {
         foreach($database as $disk) {
             if(!in_array($disk["author"],$authors)) {
                 $authors[] =$disk["author"];
             }
         }
     }
     
     echo json_encode($authors); 
}
    elseif(!empty($_GET["author"])){
        $disksByAuthor=[];
        foreach($database as $disk){
            if($disk["author"]==$_GET["author"]) {
                $disksByAuthor[] = $disk;
            }
        }
        echo json_encode($disksByAuthor);        
}
else{
    
    echo json_encode($database);
}




?>