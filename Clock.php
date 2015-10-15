<?php
echo '<style type="text/css" media="all">
                  table { color: lime; background-color: grey;
                   border: 1px solid; font: bold 36px Astronaut; width: 160px;
                   text-align: center; box-shadow: 1px 1px 1px 1px green;
                   padding: 3px; }
            </style>';
print '<meta http-equiv="refresh" content="1; URL=http://localhost/clock.php">';
date_default_timezone_set('Europe/Kiev');       
$t = date("H:i:s");

print "<table>";      
        print "<tr>";
        print "<td>". $t ."</td>";
        print "</tr>";
        print "</table>";
 ?>