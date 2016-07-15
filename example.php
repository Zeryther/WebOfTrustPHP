<?php

/*
 *  Web of Trust PHP API
 *  by Mehdi Baaboura (Zeryther)
 *  
 *  https://zeryther.com
 *  https://github.com/Zeryther
 * 
 *  Published under the MIT License
 * 
 */

require_once "WebOfTrust.php";

$wot = new WebOfTrust();

echo "Trustworthiness (facebook.com): " . $wot->getTrustworthiness("facebook.com") . "<br/>";
echo "Child Safety (facebook.com): " . $wot->getChildSafety("facebook.com") . "<br/>";

?>