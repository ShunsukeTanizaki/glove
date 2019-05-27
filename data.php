<?php
require_once('type.php');

$hardGlove = new Type('硬式用グラブ', 48000, 'images/glove01.JPG');
$hardMitt  = new Type('硬式用ミット', 50000, 'images/mitt01.JPG');
$softGlove = new Type('軟式用グラブ', 28000, 'images/glove02.JPG');
$softMitt  = new Type('軟式用ミット', 30000, 'images/mitt02.JPG');

$types = array($hardGlove, $hardMitt, $softGlove, $softMitt );
?>