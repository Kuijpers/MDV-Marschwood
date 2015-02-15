<div id="menu">
	<ul>
<?php
	
	$result = count($main_menu1);
	
	for ($i=0;$i<$result;$i++){
			echo "<li>";
     	 	echo "	<a href='";
			echo $main_menu_links1["$main_menu1[$i]"];
			echo "'>";
			echo "<img src='../images/button_";
			echo $main_menu1[$i];
			echo ".png'alt='";
			echo $main_menu1[$i];
			echo "'/>";
			echo "</a> \n";
			echo "</li>";
			
			if ($i < ($result-1)){
				echo "<li class='divider'>&nbsp;</li>\n";
			}
			
      		}
?>
	</ul>
	<ul>
<?php
	
	$result = count($main_menu2);
	
	for ($i=0;$i<$result;$i++){
			echo "<li>";
     	 	echo "	<a href='";
			echo $main_menu_links2["$main_menu2[$i]"];
			echo "'>";
			echo "<img src='../images/button_";
			echo $main_menu2[$i];
			echo ".png'alt='";
			echo $main_menu2[$i];
			echo "'/>";
			echo "</a> \n";
			echo "</li>";
			
			if ($i < ($result-1)){
				echo "<li class='divider'>&nbsp;</li>\n";
			}
			
      		}
?>
	</ul>
</div>