<?php

namespace Suainul\ZoomService;

use GuzzleHttp\Client;

class ApiRequest 
{
    protected $header = [],$json = [],$form = [],$url = "",$baseUrl="",$clientId="",$clientSecret="";
    protected $base64="";
    public function __construct()
    {
        $this->baseUrl = config('zoom.base_url', '');
        $this->clientId = config('zoom.client_id', '');
        $this->clientSecret = config('zoom.client_secret', '');
        $this->base64 = base64_encode($this->clientId.":".$this->clientSecret);
    }
    public function setHeader($data = [])
    {
        $this->header = $data;
        return $this;
    }
    public function setJson($data = [])
    {
        $this->json = $data;
        return $this;
    }
    public function setForm($data = [])
    {
        $this->form = $data;
        return $this;
    }
    public function setUrl($data)
    {
        $this->url = $data;
        return $this;
    }
    public function setBaseUrl($data)
    {
        $this->baseUrl = $data;
        return $this;
    }
    public function get($method)
    {
        $client = new Client();
        try {
            $response = $client->request($method, $this->baseUrl . $this->url, [
                'headers' => $this->header,
                'connect_timeout' => 5,
                'json' => $this->json,
                'form_params' => $this->form
            ]);

            if ($response->getStatusCode() === 200) {
                return json_decode($response->getBody()->getContents(),true);
            }
        } catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
}