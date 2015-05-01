<html>
  <head>
    <title>Accessing Associative Arrays</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5, 'BMW');

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5,
                        'make' => 'BMW');
            
        // This code will output "blue".
        echo $myArray[1];
        echo '<br/>';
            
        // Add your code here!
        echo "My car is a ".$myArray[0]." ".$myArray[1]." ".$myArray[2]." doors ".$myArray[3];
        echo '<br/>';
        echo "My car is a ".$myAssocArray['year']." ".$myAssocArray['colour']." doors ".$myAssocArray['make'];
      ?>
    </p>
  </body>
</html>