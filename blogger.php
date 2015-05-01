<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person {
          public static function say() {
              echo "Here are my thoughts!<br/>";
              }
          }
      class Blogger extends Person {
          const cats = 50;
          }
         
          Blogger::say();
          echo Blogger::cats;
      ?>
    </p>
  </body>
</html>