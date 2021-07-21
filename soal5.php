<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <input type="text" name="word" placeholder="type any word">
    <input type="submit" name="submit" value="check">
    </form>

<?php 
    if(isset($_POST['submit'])){
        $word = $_POST['word'];
        $reverse = strrev($word);

        if($word == $reverse){
            echo"<br>$word => $reverse";
            echo"<br>it is palindrome";

        }
        else{
            echo"<br>$word =>$reverse";
            echo"<br>it is not palindrome";
        }

    }

?>
</body>
</html>