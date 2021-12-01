<?php
if($_REQUEST){
    if($_REQUEST["xml"]){
        file_put_contents("xmldoc1.xml",$_REQUEST["xml"]);
        echo "Ok";
        $dom_xml= new DomDocument();
$dom_xml->loadXML($_REQUEST["xml"]);
$path="xmldoc1.xml";
echo $dom_xml->save($path);
    }
    else{
        echo "no request";
    }
}
?>