<?php

namespace Suainul\ZoomService;

class User extends ApiRequest
{
    private $result;
    private $email,$firstName,$lastName,$password,$zoomPhone = false;
    public function __construct()
    {
        parent::__construct();
    }
    public function create()
    {
        $this->setUrl("v2/users");
        $this->setJson([
            "action" => "create",
            "user_info" =>
            [
    
                "email" => $this->email,
                "first_name" => $this->firstName,
                "last_name" => $this->lastName,
                "password" => $this->password,
                "type" => 1,
                "feature" => [
                    "zoom_phone" => $this->zoomPhone
                ]
            ]
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

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of zoomPhone
     */ 
    public function getZoomPhone()
    {
        return $this->zoomPhone;
    }

    /**
     * Set the value of zoomPhone
     *
     * @return  self
     */ 
    public function setZoomPhone($zoomPhone)
    {
        $this->zoomPhone = $zoomPhone;

        return $this;
    }
}