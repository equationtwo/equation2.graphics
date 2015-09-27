<?php
$rep = $_GET["rep"];
$day = "2015-09-20";
$date = "2015-09-20 23:56:01";	
$myfile = fopen("_posts/".$day."-".$rep.".markdown", "w");
$header = "---\nlayout: post\ntitle: '".$rep."'\ndate:   ".$date."\ncategories: jekyll update\nexcerpt_separator: <!--more-->\n---";

fwrite($myfile, $header);

$content = "\n<img class='post-image' src='".$_GET["img"]."' />";

fwrite($myfile, $content);

fclose($myfile);

?>