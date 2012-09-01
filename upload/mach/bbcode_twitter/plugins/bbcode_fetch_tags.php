<?php

$tag_list['no_option']['tweet'] = array(
	'callback' => 'handle_external',
	'strip_empty' => true,
	'stop_parse' => true,
	'disable_smilies' => true,
	'disable_wordwrap' => true,
	'strip_space_after' => 2,
	'external_callback' => 'mach_handle_bbcode_twitter'
);

$tag_list['option']['tweet'] = array(
	'callback' => 'handle_external',
	'strip_empty' => true,
	'stop_parse' => true,
	'disable_smilies' => true,
	'disable_wordwrap' => true,
	'strip_space_after' => 2,
	'external_callback' => 'mach_handle_bbcode_twitter'
);

?>