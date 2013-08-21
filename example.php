<?
include "spotifyapiserver.php";
include "spotifyuser.php";
include "spotifyplaylist.php";

$user = new spotifyUser('13thmonkeys');
//var_dump($user->starred());

$pl = new spotifyPlaylist('spotify:user:13thmonkeys:playlist:2PjvhDq7fBJOgrSvpyiyvu');
var_dump($pl->show());