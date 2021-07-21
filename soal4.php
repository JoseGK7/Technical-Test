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
    <input type="submit" name="submit" value="reverse">
    </form>
<?php
    if(isset($_POST['submit'])){
        $word= $_POST['word'];
        $reverse = '';
        $i = 0;
        while(!empty($word[$i])){
            $reverse = $word[$i].$reverse;
            $i++;
        }
        echo $reverse;
    }
?>
</body>
</html>