<?

class spotifyPlaylist extends spotifyApiServer {

    protected $uri = null;

    public function __construct($uri = false) {
        $this->uri = $uri;
    }

    public function show() {
        return $this->get('playlist/'.$this->uri);
    }

}