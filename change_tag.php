<?php
$html="Este es un texto de prueba <img src='https://www.bodehogar.co/wp-content/uploads/2016/05/barranquilla_03.jpg'/> con una imagen <img src='https://www.bodehogar.co/wp-content/uploads/2016/05/barranquilla_02.jpg'/>";

$doc = new DOMDocument();
$doc->loadHTML($html);
$embeds= $doc->getElementsByTagName('img');

while($embeds->length >0){
    foreach ($embeds as $embed) {
        $src= $embed->getAttribute('src');
        $link= $doc->createElement('amp-img');
        $link->setAttribute('href', $src);
        $embed->parentNode->replaceChild($link, $embed);
    }
}

echo $doc->saveHTML();

//print_r($doc);

//$elements = $xml->getElementsByTagNameNS();

?>
<iframe height="520" width="300" src="http://widgets.dayscript.com/clients/v01" frameborder="0"></iframe>