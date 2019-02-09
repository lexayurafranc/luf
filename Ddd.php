<?php 
function first_date($den,$miesjac){ 
switch ($miesjac){ 
case '1': echo $den.' января'; break; 
case '2': echo $den.' февраля'; break; 
case '3': echo $den.' марта'; break; 
case '4': echo $den.' апреля'; break; 
case '5': echo $den.' мая'; break; 
case '6': echo $den.' июня'; break; 
case '7': echo $den.' июля'; break; 
case '8': echo $den.' августа'; break; 
case '9': echo $den.' сентября'; break; 
case '10': echo $den.' октября'; break; 
case '11': echo $den.' ноября'; break; 
case '12': echo $den.' декабря'; break; 
default: echo "1 января"; break; 
} 
} 
first_date(28,1); 
?>