<?php

require "calculator.phtml";
require "operations.php";


if(isset($_POST["nbr_one"]) && !empty($_POST["nbr_one"]) && 
isset($_POST["nbr_two"]) && !empty($_POST["nbr_two"]) && 
isset($_POST["operator"]) && !empty($_POST["operator"])){
    if($_POST["operator"] === "+"){
        
        $result = add($_POST["nbr_one"], $_POST["nbr_two"]);
    }else if($_POST["operator"] == "-"){

        $result = substract($_POST["nbr_one"], $_POST["nbr_two"]);
    }else if($_POST["operator"] == "X"){

        $result = multiply($_POST["nbr_one"], $_POST["nbr_two"]);
        var_dump($result);
    }else if($_POST["operator"] == "/"){

        $result = divide($_POST["nbr_one"], $_POST["nbr_two"]);
    }else if($_POST["operator"] == "%"){

        $result = modulo($_POST["nbr_one"], $_POST["nbr_two"]);
    }
    
}
?>