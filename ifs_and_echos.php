<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
        $myAge = 24;
        
        if ($myAge > 24) {
            echo "You are OLD";
        }
        elseif ($myAge < 24) {
            echo "You are a BABY";
        }
        else {
            echo "I am " . $myAge;
        }
    ?>
    </body>
</html>