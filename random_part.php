<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    echo rand(1,100)
    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    $name = "Cristina";
    $length = strlen($name);
    $random = rand(0, $length -1);
    print substr($name, $random, 1);
    ?>
    </p>
</html>