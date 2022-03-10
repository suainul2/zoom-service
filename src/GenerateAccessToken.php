<?php

namespace Suainul\ZoomService;

class GenerateAccessToken extends ApiRequest
{
    public $result;
    public function __construct($code)
    {
        $this->setBaseUrl("https://zoom.us/");
        $this->setUrl('oauth/token');
        $this->setForm([
            "grant_type" => "authorization_code",
            "code" => $code,
            "redirect_uri" => "https://e8ca-175-103-35-84.ngrok.io/api/get-token"
        ]);
        $this->setHeader([
            "Authorization" => "Basic ". $this->base64,
        ]);
        $this->result = $this->get("POST");
    }
}