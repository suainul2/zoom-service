<?php

namespace Suainul\ZoomService;

class ZoomService 
{
    private $service;

    public function generate($service,$code = "")
    {
        switch ($service) {
            case 'token':
                $this->service = new GenerateAccessToken($code);
                break;            
            default:
                # code...
                break;
        }
        return $this->service;
    }
}