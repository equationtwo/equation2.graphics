<?php
$rep = $_GET["rep"];
$screen = $_GET["img"];
// $rep = "CLOUD";
// $screen = "https://raw.githubusercontent.com/equationtwo/CLOUD/master/SCREENS/Screen%20Shot%202015-07-27%20at%205.50.06%20PM%20(2).png";
$day = "2015-09-20";
$date = "2015-09-20 23:56:01";


	

$i = 0; 
   $dir = '../../content/2-projects/';
   if ($handle = opendir($dir)) {
       while (($file = readdir($handle)) !== false){
           if (!in_array($file, array('.', '..')) && is_dir($dir.$file)) 
               $i++;
       }
   }
   // prints out how many were in the directory
   // echo "There were $i files";
   $i++;
   $contentPath= "../../content/2-projects/".$i."-".$rep;
   mkdir($contentPath, 0775);
   $myfile = fopen($contentPath."/project.txt", "w");
   $txt = "Title: ".$rep."\n----\nYear:   ".$date."\n----\nTags: web\n----\n";
   fwrite($myfile, $txt);
   fclose($myfile);
  
  
   // $request = "https://api.github.com/repos/".$User."/".$rep."/contents/SCREENS?ref=master";
   // $REP = file_get_contents($request);
   // echo $REP;
   // $image = file_get_contents($screen);
  //  echo $contentPath.'/screen.png';
  //  file_put_contents($contentPath.'/screen.png', $image);
   
?>