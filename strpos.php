<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
        echo strpos("Cristina" , "C");
        
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
        if (strpos("Cristina", "z") == False)
        {
            echo "Sorry, no 'z' in 'Cristina'";
        }
    ?>
    </p>
</html>