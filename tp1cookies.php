<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(!isset($_COOKIE["visited"])){
            $visit = [];
            array_push($visit,date('Y-m-d h:i:s'));
            $visitstr = implode(",", $visit);
            setcookie("visited",$visitstr,time()+86400);
            echo "C'est votre premiere visite :" . $visit[0];
            
        }
        else{
            $tab = $_COOKIE["visited"];
            $visit = explode(",", $tab);
            array_push($visit,date('Y-m-d h:i:s'));
            $visitstr = implode(",", $visit);
            setcookie("visited",$visitstr,time()+86400);
            echo "vous avez consulter cette page " . count($visit);
            echo "<ul>";
            for ($i = 1;$i <= count($visit)-1;$i++){
                echo "<li>" . $visit[$i] . "</li>" ;
            }
            echo "</ul>";
        }
       
        
        
    ?>
</body>
</html>