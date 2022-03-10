<?php

namespace Suainul\ZoomService;

class ZoomService 
{
    private $service;

    public function generate($service)
    {
        switch ($service) {
            case 'create':
                $this->service = new CreateMeeting;
                break;            
            default:
                # code...
                break;
        }
        return $this->service;
    }
}