<?

class spotifyUser extends spotifyApiServer {

    protected $username = null;

    public function __construct($username = false) {
        if(!$username) die('no username found');
        $this->username = $username;
    }

    public function playlists() {
        return $this->get('user/'.$this->username.'/playlists');
    }

    public function starred() {
        return $this->get('user/'.$this->username.'/starred');
    }
}