<?php
include 'simple_html_dom.php';
$html = file_get_html('http://www.quickbistro.cz/cs/rozvoz');

$count = substr_count($html,'<li class="item">');
/*foreach($html->find("div[class=article]") as $jidlo){
	 $cena = $html->find("span[class=price]");
	 echo $jidlo . '<br>';
	 print_r($cena);
}*/

for($x = 0; $x <= $count; $x++) {
	$cena = $html->find("span[class=price]", $x);
	$jidlo = $html->find("div[class=article]", $x); 
	echo $jidlo . '<br>' . $cena . '<br>';
	
	}


?>
