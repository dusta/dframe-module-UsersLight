<?php
namespace Users\Entity;

/**
 * @author Sławomir Kaleta <slaszka@gmail.com>
 */

class User
{
    protected $id;
    protected $username;
    protected $email;
    protected $firstname;
    protected $lastname;
    protected $lastActive;
    private $isLogged = false;
    protected $urls = [];

    public function __construct($id = null)
    {
        if (isset($id) and !empty($id)) {
            $this->isLogged = true;
            $this->setId($id);
        }
    }

    public function isLogged()
    {
        return $this->isLogged;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /* Pobieranie danych */
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setUrls($urls)
    {
        $this->urls = $urls;
    }

    public function getAttributes()
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'urls' => $this->urls
        ];
    }
}
