<?php

namespace Suainul\ZoomService;

class CreateMeeting extends ApiRequest
{
    private $result;
    public function __construct()
    {
        parent::__construct();
    }
    public function create($data= [],$email)
    {
        $this->setUrl("v2/users/{$email}/meetings");
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