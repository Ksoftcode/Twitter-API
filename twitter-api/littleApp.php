<?php

echo "<h2> Simple API Test</h2>";

require_once ('TwitterAPIExchange.php');

// Set acces tokens here -
$settings = Array(

'oauth_access_token' => "481072224-aNxFpF3hUBbhFaNSNwMgK8x1DSY5MK0EWPV4yt14",
'oauth_access_token_secret' => " f3OVmtrcF1pOFHNz0SxbrLlS1a4XAmKBW5ViQ8URrFOEV",
'consumer_key' => "YP1ZbOMl7Qe4ofb8IQtaz5F5J",
'consumer_secret' => " P5dmsjYny1uoLEikGIBnO7acrgPxeNyH0z0RsP6XHeULJIlIhu"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

$requestMethod = "GET";

$getfield = '?screen_name=samclef12&count=20';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>