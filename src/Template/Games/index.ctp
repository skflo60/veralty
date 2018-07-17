<?php
// src/Template/Recipes/xml/index.ctp
// Faire du formatage et de la manipulation sur le tableau
// $recipes.
$xml = Xml::fromArray(['response' => $games]);
echo $xml->asXML();
?>