<?php
include 'simple_html_dom.php';
$html = file_get_html('http://www.quickbistro.cz/cs/rozvoz');
libxml_use_internal_errors(true);
$dom-> new DOMDocument;
$dom->loadHtml('$html');
echo $dom->getElementsByTagName('item')->length, PHP_EOL;
echo $html->find("li[class=item]", 1); 
?>
