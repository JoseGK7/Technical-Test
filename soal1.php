<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="number">
        <input type="submit" name= "check" value="check">
    </form>
    <?php 
    if(isset($_POST['check']))
    {
        $number = $_POST['number'];
        
        
          $result =  $number % 3 ;

        if($result==0){
        echo" Hello";
        }
        
        $result2 = $number % 5;
        if($result2 == 0) 
        echo" World";           
             
    }   
    ?>
</body>
</html>