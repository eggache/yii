<?php 
function get($url){
    $beg = strrpos($url, '/');
    $filename = substr($url, $beg+1);
    $file = file_get_contents($url);
    echo $file; 
}
if(count($argv) < 2) {
    die('url');
}
get($argv[1]);
