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

class WebOfTrust {
	
	private $apiKey = ""; // Your WOT private key | get it here: http://www.mywot.com/profile/api
	
	public function getTrustworthiness($domain) {
		$domain = strtolower($domain);
		
		$lookup = file_get_contents("http://api.mywot.com/0.4/public_link_json2?hosts=" . $domain . "/&key=" . $this->apiKey);
		$json = json_decode($lookup, true);
			
		$results = $json[$domain];
		
		$trustworthiness = $results[0][0];
		
		return $trustworthiness;
	}
	
	public function getChildSafety($domain) {
		$domain = strtolower($domain);
		
		$lookup = file_get_contents("http://api.mywot.com/0.4/public_link_json2?hosts=" . $domain . "/&key=" . $this->apiKey);
		$json = json_decode($lookup, true);
			
		$results = $json[$domain];
		
		$childSafety = $results[4][0];
		
		return $childSafety;
	}
	
}

?>