<?php
   $xslDoc = new DOMDocument();
   $xslDoc->load("data.xsl");

   $xmlDoc = new DOMDocument();
   $xmlDoc->load("data.xml");

   $proc = new XSLTProcessor();
   $proc->importStylesheet($xslDoc);
   echo $proc->transformToXML($xmlDoc);
?>
