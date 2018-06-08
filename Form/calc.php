<?php
//echo $_GET["age"];
    if(isset($_GET["gdpr"])) {
        if (empty($_GET["a"]) || empty($_GET["b"])) {
            echo "<div>Cannot calculate without values</div>";
        }
        else{
            $a = $_GET["a"];
            $b = $_GET["b"];
            $opp = $_GET['opp'];
    
            switch($opp)
            {
                case "add":
                    if($_GET["skill"] == "advanced" || $_GET["age"] == "basic")
                    echo $a + $b;
                    break; 
                case "sub":
                    if($_GET["skill"] == "advanced" || $_GET["age"] == "basic")
                    echo $a - $b;
                    break;
                case "mul":
                    if($_GET["skill"] == "advanced")
                    echo $a * $b;
                    else
                    echo "YOU ARE UNSKILLED FOR THIS OPPERATION, KID!";
                    break; 
                case "div":
                    if($_GET["skill"] == "advanced")
                    echo $a / $b;
                    else
                    echo "YOU ARE UNSKILLED FOR THIS OPPERATION, KID!";
                    break;
            }
        }
    }
    else
    echo "You do NOT check the terms!";
?>