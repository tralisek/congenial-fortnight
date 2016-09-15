<?php
include_once('simple_html_dom.php');
libxml_use_internal_errors(true);
$html = file_get_html('http://www.quickbistro.cz/cs/rozvoz');
$dom = new DOMDocument();
$dom->loadHTML($html);
libxml_use_internal_errors(false);
foreach($dom->getAllElements as $element){
	if(!$element->hasClass('article')){
		$element->addClass('article');
		} else {
			$element->removeClass('article');
		}
	
}
$html = $dom->SaveHTML();
echo $html;
?>
