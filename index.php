<?php 
echo 'hello world';

for($i=1;$i<=9;$i++){	
	echo '<tr>';
		for($j=1;$j<=$i;$j++){	
		 echo '<td>'.$i.'X'.$j=$i*$j.'</td>';
		}
	echo '</tr>'
}