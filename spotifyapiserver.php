<?

class spotifyApiServer {

    protected $serverUrl = "127.0.0.1";
    protected $serverPort = 1337;    

    protected function getApiUrl($method) {
        return sprintf(
            'http://%s:%s/%s',
            $this->serverUrl,
            $this->serverPort,
            $method
        );
    }

    protected function post($method, $data) {} 

    protected function get($method) {
        $url = $this->getApiUrl($method);
        $string = file_get_contents($url);
        $json = json_decode($string, true);

        return $json;
    }
}