<?php

/**
 * @Entity
 */
class User {
    /** @Id @Column(type="string", length=8 */
    private $id;

    /** @Column(type="string") */
    private $username;

    /** @Column(type="string", length=60) */
    private $password;

    /** @Column(type="string") */
    private $email;

    /** @Column(type="string") */
    private $phone;

    /** @Column(type="boolean") */
    private $twoFactorEnabled;

    /** @Column(type="datetime") */
    private $lastLogin;

    /** @Column(type="datetime") */
    private $lastActivity;

    /** @Column(type="datetime") */
    private $lastUpdated;

    /** @Column(type="boolean") */
    private $enabled;

    public function getId() {
        $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getTwoFactorEnabled()
    {
        return $this->twoFactorEnabled;
    }

    public function setTwoFactorEnabled($twoFactorEnabled)
    {
        $this->twoFactorEnabled = $twoFactorEnabled;
    }

    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
    }

    public function getLastActivity()
    {
        return $this->lastActivity;
    }

    public function setLastActivity()
    {
        // Now
        //$this->lastActivity = $lastActivity;
    }

    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    public function setLastUpdated()
    {
        // Now
        //$this->lastUpdated = $lastUpdated;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }
}

?>