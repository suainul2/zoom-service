<?php

namespace Suainul\ZoomService;

class Meeting extends ApiRequest
{
    private $result;
    private $topic,$startTime,$duration,$password,$email;
    public function __construct()
    {
        parent::__construct();
    }
    public function create()
    {
        $this->setUrl("v2/users/{$this->email}/meetings");
        $this->setJson([
            "topic" => $this->topic,
            "type" => 2,
            "start_time" => $this->startTime,
            "duration" => $this->duration, // 30 mins
            "password" => $this->password
        ]);
        $this->setHeader([
            "Authorization" => "Bearer {$this->api_key}",
            'Content-Type' => 'application/json'
        ]);
        $this->result = $this->get("POST");
        return $this;
    }
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */ 
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of startTime
     */ 
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set the value of startTime
     *
     * @return  self
     */ 
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get the value of topic
     */ 
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set the value of topic
     *
     * @return  self
     */ 
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}