<?php
  $file_contents  = '<?php die(); ?>' . "\n";
?>

If you try to remove it by turning it into a comment, you get this:

<?php
//  $file_contents  = '<?php die(); ?>' . "\n";
?>

Which results in ' . "\n"; (and whatever is in the lines following it) to be output to your HTML page.

The cure is to either comment it out using /* */ tags, or re-write the line as:

<?php
  $file_contents  = '<' . '?php die(); ?' . '>' . "\n";
?>