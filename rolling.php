<!DOCTYPE html>
<html>
    <head>
		<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
        //write your do-while loop below
         do {

            $roll = mt_rand(1,6);
            echo "You rolled a {$roll}.";


        } while ($roll != 6);

            
    ?>
    </body>
</html>