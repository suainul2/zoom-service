<?php

namespace Suainul\ZoomService;

class CreateUser extends ApiRequest
{
    private $result;
    public function __construct()
    {
        parent::__construct();
    }
    public function create($data= [])
    {
        $this->setUrl("v2/users");
        $this->setJson($data);
        $this->setHeader([
            "Authorization" => "Bearer {$this->api_key}",
            'Content-Type' => 'application/json'
        ]);
        $this->result = $this->get("POST");
    }
    public function getResult()
    {
        return $this->result;
    }
}