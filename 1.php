<?php

if (isset($_COOKIE['user'])) {
	$user = $_COOKIE['user'];
	setcookie('user', ++$user, time() + 3600*60*60);
} else {
	setcookie("user", 0, time() + 3600*60*60);
}

if ($user > 0 and $user < 20) {
	if ($user == 5 or $user == 10 or $user == 15) {
		echo "Uhuu! Number of views: ".$user;
	} else {
		echo "Number of views: ".$user;
	}
} else {
	echo "Number of views: ".$user;
	setcookie("user", 0);
}
