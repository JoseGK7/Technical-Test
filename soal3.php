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
        <input type="number" name="hour" placeholder="hour 1-12">
        <input type="number" name="minute" placeholder="Minute 0-59">
        
        <select name="time" id="">
            <option value="am" >am</option>
            <option value="pm" >pm</option>
        </select>
        <br><br>
        <input type="submit" name= "convert" value="convert">
    </form>

    <?php 
        if(isset($_POST['convert']))
        {
            $hour = $_POST['hour'];
            $minute = $_POST['minute'];
            $time = $_POST['time'];
           
           

            if($hour < 12 && $hour > 0 && $minute <60 && $minute >= 0 && $time== 'pm'){
                $hour = $hour + 12;
                echo"<br>Jam $hour, $minute Menit";
            }
            if($hour < 12 && $hour > 0 && $minute <60 && $minute >= 0){
                echo"<br>Jam $hour, $minute Menit";
            }
            
            if($hour == 12 && $hour > 0 &&  $minute <60 &&  $minute >= 0 && $time== 'am'){
                $hour = $hour = 0 ;
                echo"<br>Jam 0$hour, $minute Menit ";
  
                }

            if($hour == 12 && $hour > 0 &&  $minute <60 &&  $minute >= 0 && $time== 'pm'){
                
                echo"<br>Jam $hour, $minute Menit";

                }


            
 
        }
    ?>
</body>
</html>