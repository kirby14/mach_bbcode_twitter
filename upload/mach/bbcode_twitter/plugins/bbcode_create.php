<?php

$this->unparsed_tags[] = 'tweet';

function mach_handle_bbcode_twitter(&$registry, $code, $title = null) {
	$code = $registry->strip_front_back_whitespace($code, 1);
	$html = mach_get_twitter_oembed($code);
	return $html;
}


function mach_get_twitter_oembed($id) {
	$twitterUrl = sprintf('https://api.twitter.com/1/statuses/oembed.json?id=%s&omit_script=true', $id);

	$result = @file_get_contents($twitterUrl);

	if($result) {
		$feed = json_decode($result);
		return $feed->html;
	}
}

?>