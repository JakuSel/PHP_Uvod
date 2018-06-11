<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phphistory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo $_GET["age"];
    if(isset($_GET["gdpr"])) {
        if ($_GET["a"] == null|| $_GET["b"] == null) {
            echo "<div>Cannot calculate without values</div>";
        }
        else{
            $a = $_GET["a"];
            $b = $_GET["b"];
            $opp = $_GET['opp'];

            switch($opp)
            {
                case "add":
                    if($_GET["skill"] == "advanced" || $_GET["skill"] == "basic"){
                        echo $a + $b;
                        $opperator = "+";
                        $result = $a + $b;
                    }                    
                    break; 
                case "sub":
                    if($_GET["skill"] == "advanced" || $_GET["skill"] == "basic"){
                        echo $a - $b;
                        $opperator = "-";
                        $result = $a - $b;
                    }                    
                    break;
                case "mul":
                    if($_GET["skill"] == "advanced"){
                        $opperator = "*";
                        $result = $a * $b;
                        echo $a * $b;
                    }
                    else
                    echo "YOU ARE UNSKILLED FOR THIS OPPERATION, KID!";
                    break; 
                case "div":
                    if($_GET["skill"] == "advanced"){
                        $opperator = "/";
                        $result = $a / $b;
                        echo $a / $b;
                    }
                    else
                    echo "YOU ARE UNSKILLED FOR THIS OPPERATION, KID!";
                    break;
            }
            if(empty($a) || empty($b) || empty($opperator)){
                echo "<br>Cannot insert into database";
            }
            else{
                $sql = "INSERT INTO calc_history (a, b, opp, result, date) 
                VALUES ($a, $b, '$opperator', $result,now())";
               
               if ($conn->query($sql) === TRUE) {
                   echo "<br>New record created successfully";
               } else {
                   echo "Error: " . $sql . "<br>" . $conn->error;
               }               
               $conn->close();
            }           
        }
    }
    else
    echo "You do NOT check the terms!";
?>