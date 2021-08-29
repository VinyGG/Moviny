<?php
//Class by S.C. Chen - http://simplehtmldom.sourceforge.net
require_once 'simple_html_dom/simple_html_dom.php';

function getURL($id) {
	$url = 'http://www.imdb.com/title/' . $id;
	return $url;
}
function getHTML($id) {
	$url = getURL($id);
	return file_get_html($url);
}
function getTitle($id) {
	$html = getHTML($id);
	$str = $html->find("div#ratingWidget p strong", 0);
	return $str->plaintext;
}
function getOrigTitle($id) {
	$html = getHTML($id);
	$str = $html->find("div.originalTitle", 0);
	if ($str) {
		return substr($str->plaintext, 0, -18);
	} else {
		return getTitle($id);
	}
}
function getUrlPoster($id) {
	$html = getHTML($id);
	$str = $html->find("div.minPosterWithPlotSummaryHeight div.poster a img", 0);
	if ($str) {
		return $str->src;
	}
	$str = $html->find("div.slate_wrapper div.poster a img", 0);
	if ($str) {
		return $str->src;
	}
	return "null";

}
function getYear($id) {
	$html = getHTML($id);
	$str = $html->find("span#titleYear a", 0);
	return $str->plaintext;
}
function getCategory($id) {
	$html = getHTML($id);
	$str = $html->find("div.title_wrapper div.subtext a span.itemprop", 0);
	$str = substr($str->plaintext, 0, -1);
	if ($str == "Action") {
		return "Ação";
	} else if ($str == "Adventure") {
		return "Aventura";
	} else if ($str == "Mystery") {
		return "Mistério";
	} else if ($str == "Animation") {
		return "Animação";
	} else if ($str == "Horror") {
		return "Terror";
	} else if ($str == "Fantasy") {
		return "Fantasia";
	} else if ($str == "Comedy") {
		return "Comédia";
	}
	return $str;
}
function getDirector($id) {
	$html = getHTML($id);
	$str = $html->find("div.credit_summary_item span a span.itemprop", 0);
	return substr($str->plaintext, 0, -1);
}
function getStarring1($id) {
	$html = getHTML($id);
	$str = $html->find("tr.odd td.itemprop a span.itemprop", 0);
	return substr($str->plaintext, 0, -1);
}
function getStarring2($id) {
	$html = getHTML($id);
	$str = $html->find("tr.even td.itemprop a span.itemprop", 0);
	return substr($str->plaintext, 0, -1);
}
function getSinopsys($id) {
	$html = getHTML($id);
	$str = $html->find("div#titleStoryLine div p", 0);
	$str = $str->plaintext;
	if(preg_match('/(.*) Written by/', trim($str), $str2)) {
		$str2 = $str2[1];
		return $str2;
	}
	return $str;
}
function getRating($id) {
	$html = getHTML($id);
	$str = $html->find("div.ratingValue strong span", 0);
	return $str->plaintext;
}
?>