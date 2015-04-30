<html>
  <p>
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
    $my_name = "Cristina";
    echo substr($my_name, 0,4);
    ?>
  </p>
  <p>
    <?php
    // Make your name upper case and print it to the screen:
    $my_name = "Cristina";
    $upper = strtoupper($my_name);
    echo $upper; 
    ?>
  </p>
  <p>
    <?php
    // Make your name lower case and print it to the screen:
    $my_name = "Cristina";
    $lower = strtolower($my_name);
    echo $lower;
    ?>
  </p>
</html>