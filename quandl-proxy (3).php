<?php

/**
 * Proxy and cache requests to https://www.quandl.com/
 */

$url = $_GET['url'];
$timeout = $_GET['timeout'];

if (!$timeout) {
	$timeout = 3600; // defualt is 1 hour (3600 secs)
}

if (!preg_match("/^https?\:\/\/www\.quandl\.com/", $url)) die('Not allowed to access any site except https://www.quandl.com');

// cache the file
function cache_file($url, $content) {
	$unique_key = sha1($url);
	file_put_contents('./' . $unique_key . '-modified', time());
	return file_put_contents('./' . $unique_key, $content);
}

// retrieve the cached file
function get_cache_file($url, $timeout = 3600) {
	$unique_key = sha1($url);
	$modified_time = @file_get_contents('./' . $unique_key . '-modified');
	$time_elapsed = time() - $modified_time;
	if ($time_elapsed > $timeout) {
		if (file_exists('./' . $unique_key)) unlink('./' . $unique_key);
	} else {
		return file_get_contents('./' . $unique_key, $content);
	}
	
}

function _log($text) {
	//echo $text . "\n";
}


$opts = array(
  'http'=>array(
    'method'=>"GET"
  )
);

$context = stream_context_create($opts);

$contents = get_cache_file($url, $timeout);

if (!$contents) {
	_log('Getting file from remote');
	$contents = file_get_contents($url, false, $context);
	cache_file($url, $contents);
} else {
	_log('Getting file form local');
}



if ($contents) {
	//header('Content-Type', 'text/csv');
	echo $contents;
} else {
	echo 'Error retrieving file!';
}



