<?php

namespace Suainul\ZoomService;

class ZoomService 
{
    private $service;
    
    const CREATE = 'create';
    const ADD_USER = 'add_user';
    
    public function generate($service)
    {
        switch ($service) {
            case self::CREATE:
                $this->service = new CreateMeeting;
                break;
            case self::ADD_USER:
                $this->service = new CreateUser;
                break;             
            default:
                # code...
                break;
        }
        return $this->service;
    }
}