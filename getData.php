<?php

	//header('content-type: application/json; charset=utf-8');

	function getData($reviews, $offset, $google, $internal, $yelp, $threshold)
	{

		if(!function_exists("curl_init")) die("cURL extension is not installed");

		//next example will recieve all messages for specific conversation
		$apiKey = "61067f81f8cf7e4a1f673cd230216112";
		$service_url = "http://test.localfeedbackloop.com/api?apiKey=".$apiKey."&noOfReviews=".$reviews."&internal=".$internal."&yelp=".$yelp."&google=".$google."&offset=".$offset."&threshold=".$threshold;
		$curl = curl_init($service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);
		if ($curl_response === false) {
		 $info = curl_getinfo($curl);
		 curl_close($curl);
		 die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);

		$decoded = json_decode($curl_response);
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		 die('error occured: ' . $decoded->response->errormessage);
		}

		echo json_encode($decoded);
	}

	$reviews = isset($_POST["reviews"])?$_POST["reviews"]:10;
	$offset = isset($_POST["offset"])?$_POST["offset"]:0;
	$google = isset($_POST["google"])?$_POST["google"]:1;
	$internal = isset($_POST["internal"])?$_POST["internal"]:1;
	$yelp = isset($_POST["yelp"])?$_POST["yelp"]:1;
	$threshold = isset($_POST["threshold"])?$_POST["threshold"]:1;

	getData($reviews, $offset, $google, $internal, $yelp, $threshold);

?>