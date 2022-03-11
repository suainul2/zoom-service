<?php

namespace Suainul\ZoomService;

class ZoomService  
{    
    public function CreateUser()
    {
        return new CreateUser;
    }
    public function CreateMeeting()
    {
        return new CreateMeeting;

    }
}