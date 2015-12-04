<?php

class sendZoomRequest{
	
	/*The API Key, Secret, & URL will be used in every function.*/
	private $api_key = 'Please Input Your Own API Key Here';
	private $api_secret = 'Please Input Your Own API Secret Here';
	private $api_url = 'https://api.zoom.us/v1/';

	/*Function to send HTTP POST Requests*/
	/*Used by every function below to make HTTP POST call*/
	public function sendRequest($calledFunction, $data){
		/*Creates the endpoint URL*/
		$request_url = $this->api_url.$calledFunction;

		/*Adds the Key, Secret, & Datatype to the passed array*/
		$data['api_key'] = $this->api_key;
		$data['api_secret'] = $this->api_secret;
		$data['data_type'] = 'JSON';

		$postFields = http_build_query($data);
		/*Check to see queried fields*/
		/*Used for troubleshooting/debugging*/
		echo $postFields;

		/*Preparing Query...*/
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_URL, $request_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		$response = curl_exec($ch);

		/*Check for any errors*/
		$errorMessage = curl_exec($ch);
		echo $errorMessage;
		curl_clost($ch);

		/*Will print back the response from the call*/
		/*Used for troubleshooting/debugging		*/
		echo $request_url;
		var_dump($data);
		var_dump($response);
		if(!$response){
			return false;
		}
		/*Return the data in JSON format*/
		return json_encode($response);
	}
}

?>