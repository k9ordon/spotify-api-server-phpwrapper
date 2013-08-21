spotify-api-server - php wrapper
==================================

a php wrapper for liesen/spotify-api-server 

## User
```php
$user = new spotifyUser('13thmonkeys');
var_dump($user->starred());
```

## Playlist
```php
$pl = new spotifyPlaylist('spotify:user:13thmonkeys:playlist:2PjvhDq7fBJOgrSvpyiyvu');
var_dump($pl->show());
```