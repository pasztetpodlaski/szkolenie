<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="post">
            liczba:<input type="text" name="liczba">
            <input type="submit">
        </form>
        <?php
        
        echo'zad1';//wow dopisane tak bardzo
        
        $liczba=$_POST["liczba"];
        
        if($liczba==1)
        {
            echo 'sztuka';
        }
        else if($liczba>=2 && $liczba<5)
        {
            echo 'sztuki';
        }
        else
        echo 'sztuk';
        
   
            
      
        
        ?>
    </body>
</html>
