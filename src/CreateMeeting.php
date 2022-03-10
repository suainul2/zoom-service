<?php

namespace Suainul\ZoomService;

class CreateMeeting extends ApiRequest
{
    public $result;
    public function __construct()
    {
        $this->setUrl('oauth/token');
        $this->setJson([
            "topic" => "Let's learn Laravel",
            "type" => 2,
            "start_time" => "2022-03-11T20:30:00",
            "duration" => "30", // 30 mins
            "password" => "123456"
        ]);
        $this->setHeader([
            "Authorization" => "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6Imk3RUJ0YVBPUm51LUFYYXIxcEs3d3ciLCJleHAiOjE2NDc1MTE1MDAsImlhdCI6MTY0NjkwNjcwMX0.nmA5g52JMp2acb-IsXJ5F9qlz9tyFz8ldsStgmllJx0",
        ]);
        $this->result = $this->get("POST");
    }
}