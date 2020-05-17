<?php
$url = $_GET['url'].'&conv_from='.$_GET['conv_from'].'&conv_to='.$_GET['conv_to'];
$url = str_replace(' ', '+', $url);
$pagina = file_get_contents($url);
echo $pagina;
?>