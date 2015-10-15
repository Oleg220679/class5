<?php
        
$text = $_POST['zmist'];
$nazva = $_POST['nazva'];

$fp = fopen("$nazva.txt", "w+");

fwrite($fp, $text);

fclose($fp);

 ?>
 <html>
 <head>
 <meta charset="utf-8">
  <title>Form</title>
 </head>
 <body>
     <form action="filemake.php" method="POST">
        <span>"Textarea"</span><br>
        <input type="text" name="zmist" required><br>
        <span>"Text"</span><br>
        <input type="text" name="nazva" required><br>
        <input type="submit" value="Submit">
     </form>

</html>