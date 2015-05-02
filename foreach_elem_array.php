<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      // On the line below, create your own associative array:
    $myArray = array('Being Erica'=>4,
                        'Alias'=>5,
                        'Once upon a time'=>1,
                        'Andromeda'=>5,
                        'Blood ties'=>2);

      // On the line below, output one of the values to the page:
     echo 'Andromeda has '.$myArray['Andromeda'].' seasons'; echo '<br/>';
          
      // On the line below, loop through the array and output
      // *all* of the values to the page:
     foreach($myArray as $name=>$season) {
         switch($myArray) {
             case ($season==1):
                 echo $name." has ".$season." season.";echo '<br/>';
                 break;
             default:
                 echo $name." has ".$season." seasons."; echo '<br/>';
             }
         
         }
     
      ?>
    </p>
  </body>
</html>