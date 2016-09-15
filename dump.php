<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once('simple_html_dom.php');
$html = file_get_html('http://www.quickbistro.cz/cs/rozvoz');

$classname = 'item';
$dom = new DOMDocument;
$internalErrors = libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_use_internal_errors($internalErrors);
$xpath = new DOMXpath($dom);
$results = $xpath->query("//li[class='" . $classname . "']");

if ($results->length > 0) {
	echo $review = $results->item(0)->nodeValue;
}

?>
