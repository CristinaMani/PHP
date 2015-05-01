<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
        function greetings($name) {
            echo "Greetings, " . $name . "!";
        }
        greetings("Cristina"); 

        function aboutMe($name, $age) {
            echo "Hello! My name is $name, and I am $age years old.";
        }    
        aboutMe("Cristina", 24);
        ?>
      </p>
    </body>
</html>