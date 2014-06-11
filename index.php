<?php
use \Trello\Trello;

$trelloKey = '698e58f291aaec1fdb8ff04ef21f9381';

if (!$_ENV['TRELLO_TOKEN']) {
	header('HTTP/1.0 401 Unauthorized');
	echo 'Please authenticate: https://trello.com/1/connect?name=Bristech%20Meetup%20Call%20For%20Speakers&expiration=never&response_type=token&scope=read,write&key=' . $trelloKey;
	exit;
}

$trello = new Trello($trelloKey, null, $_ENV['TRELLO_TOKEN']);

$trello->cards->post(array('name' => $_POST['name'] . ' - ' . $_POST['title']));