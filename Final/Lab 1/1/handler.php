<?php

if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['name']; // STRING

    if($name == ""){
        echo "null name!";
    }else{
            $std = [
            's1'=>['name'=>$name, 'id'=>1, 'cgpa'=>3.5]
        ];

        $length = strlen($name);

        echo "Name from handler page: ".$std['s1']['name']."<br>";
        echo "Name length: ".$length;
    }
     }else{
           echo "please submit form first!";
}

?>