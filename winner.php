<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    
    $fam = array("Radek", "Pawel", "Cata", "grandma", "Ana");
    array_push($fam, "me");
    
    $sort = sort($fam);
    
    $howmanyfriends = count($fam) - 1;
    $randfriend = rand(0,$howmanyfriends);
    print strtoupper($fam[$randfriend]);
    print " WINS!!!!";
	// Sort the list

	// Randomly select a winner!

	// Print the winner's name in ALL CAPS
	?>
	</p>
</html>