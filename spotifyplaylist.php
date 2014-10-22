<?

class spotifyPlaylist extends spotifyApiServer {

    protected $uri = null;

    public function __construct($uri = false, $port = 1337) {
        $this->uri = $uri;
        $this->serverPort = $port;
    }

    public function show() {
        return $this->get('playlist/'.$this->uri);
    }

}
