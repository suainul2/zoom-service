<?php

namespace Suainul\ZoomService;

use GuzzleHttp\Client;

class ApiRequest 
{
    protected $header = [],$json = [],$form = [],$url = "",$baseUrl="",$api_key="";
    public function __construct()
    {
        $this->baseUrl = config('zoom.base_url', '');
        $this->api_key = config('zoom.api_key', '');
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
            return json_decode($response->getBody());
        } catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
}