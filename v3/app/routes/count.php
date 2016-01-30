<?php
$app->get('/torrents/count/', function () use ($app) {
	$results = $app->shrinkWrap->query("SELECT TABLE_ROWS FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'torrents';");
	 if (empty($results)) {
            http_response_code(500);
            $error = '{"statuscode":500,"Internal server error"}';
			header('Content-Type: application/json');
            echo($error);
        } else {
            $total = $results[0]["TABLE_ROWS"];
            $error = "{\"statuscode\":200,\"message\":$total}";
			header('Content-Type: application/json');
            echo($error);
        }
    return $response;
});