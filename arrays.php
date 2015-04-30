<!DOCTYPE html>

<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        
        // Write the code to modify
        // the $languages array!
        $languages[1] = "C/C++";
        
        echo $languages;
        
      ?>
    </p>
  </body>
</html>