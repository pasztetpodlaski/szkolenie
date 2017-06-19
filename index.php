<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor. 
-->
<?php
// Start the session
session_start();
$cookie_name = "szkolenie";
$cookie_value = "ProjektTestowy";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="index.php" method="post">
            liczba:<input type="text" name="liczba">
            
            kwota:<input type="text" name="kwota">
            <input type="submit">
            
        </form>
        <?php
        $_SESSION["szkolenie"] = "szkolenie";
        echo'zad1';//wow dopisane tak bardzo
        
        
          if(isset($_POST)&& !empty($_POST["liczba"])&& !empty($_POST["kwota"]))
          {
              
        $liczba=$_POST["liczba"];
        
        if($liczba==1)
        {
            echo $liczba . 'sztuka';
        }
        else if($liczba>=2 && $liczba<5)
        {
            echo $liczba .  'sztuki';
        }
        else
        echo $liczba . 'sztuk';
        
   
            
      echo"zad2.tablica";
      
      for($i=0;$i<=9;$i++)
      {
          $tab[$i]=rand(0,10);
          echo $tab[$i] . " ";
          
      }
         
        
         function zapisliczbySetki($pieniadz)
      {
      $jednosci=array('0','jeden','dwa','trzy','cztery','piec','szesc','siedem','osiem','dziewiec','ascie');
      $dziesiatki=array('dziescia','dziesci','dziesiat');
      
      
      if($pieniadz[0]>2 && $pieniadz[0]<=4)
      {
          echo $jednosci[$pieniadz[0]] . 'sta' . ' ';
      }
      else if($pieniadz[0]>=5)
      {
          echo $jednosci[$pieniadz[0]] . 'set' . ' ';
          
      }
      else if ($pieniadz[0]==1)
      {
          echo "sto" . " ";
      }
      else
          echo "dwiescie";
     
      }
      
      function zapisliczbyDziesiatki($pieniadz)
      {
      $jednosci=array('0','jeden','dwa','trzy','cztery','piec','szesc','siedem','osiem','dziewiec');
      $dziesiatki=array('dziescia','dziesci','dziesiat');
      
          if($pieniadz[1]==1)
      {
          echo $jednosci[$pieniadz[1]] . 'ascie' . ' ';
      }
      else
      {
         echo $jednosci[$pieniadz[1]] . 'dziesci' . ' ' . $jednosci[$pieniadz[2]] . ' ';
          
      }
      }
      
       function zapisliczbyGrosze($pieniadz)
      {
      $jednosci=array('0','jeden','dwa','trzy','cztery','piec','szesc','siedem','osiem','dziewiec');
      $dziesiatki=array('dziescia','dziesci','dziesiat');
      
          if($pieniadz[1]==1)
      {
          echo $jednosci[$pieniadz[1]] . 'ascie' . ' ';
      }
      else
      {
         echo $jednosci[$pieniadz[0]] . 'dziesci' . ' ' . $jednosci[$pieniadz[1]] . ' ';
          
      }
      
      }
      echo strlen($_POST["kwota"]) . "<br>";
      $kwota=$_POST["kwota"];
      $podzielony=explode(".",$kwota);
      echo $podzielony[0] . "<br>";
      echo $podzielony[1] . "<br>";
      zapisliczbySetki($podzielony[0]);
      zapisliczbyDziesiatki($podzielony[0]);
      echo "zlotych ";
      zapisliczbyGrosze($podzielony[1]);
      echo "groszy";
          }
          else{
              echo "episz dane";
          }
      
        ?>
    </body>
</html>
