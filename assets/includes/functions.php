<?php
	const BASEURL = "https://norespawn.netlify.com/cockpit/api/";
	const TOKEN = "?token=db1efa54f7cd2d651b2e24f20f2e01";
	
	const ALL_COLLECTIONS = "collections/listCollections";
	const COLLECTION_ENTRIES = "collections/get/";
	
	const SINGLETON = "singletons/get/";
	
	// Get List of all Collections
	function getCollectionsList() {
		// Initialize cURL and fetch from API
		$curl = curl_init();
		
		// Set cURL options
		curl_setopt_array($curl, array(
			CURLOPT_URL => BASEURL . ALL_COLLECTIONS . TOKEN,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache"
			),
		));
		
		// Execute cURL
		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		// Releasing the cURL handle
		curl_close($curl);
		
		// Decode cURL
		$response = json_decode($response); 

		return $response;
	}
	
	// Get Projects Entries
	function getProjectsEntries() {
		// Initialize cURL and fetch from API
		$curl = curl_init();
		
		// Set cURL options
		curl_setopt_array($curl, array(
			CURLOPT_URL => BASEURL . COLLECTION_ENTRIES . "projects" . TOKEN,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache"
			),
		));
		
		// Execute cURL
		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		// Releasing the cURL handle
		curl_close($curl);
		
		// Decode cURL
		$response = json_decode($response); 

		return $response;
	}
	
	// Get Static Page Entries
	function getStaticEntries() {
		// Initialize cURL and fetch from API
		$curl = curl_init();
		
		// Set cURL options
		curl_setopt_array($curl, array(
			CURLOPT_URL => BASEURL . COLLECTION_ENTRIES . "static_pages" . TOKEN,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache"
			),
		));
		
		// Execute cURL
		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		// Releasing the cURL handle
		curl_close($curl);
		
		// Decode cURL
		$response = json_decode($response); 

		return $response;
	}
	
	// Get Singleton Data
	function getSingletonData() {
	}
	
	// Store Form Submission as Entry
	function postFormSubmission() {
		
	}	
?>