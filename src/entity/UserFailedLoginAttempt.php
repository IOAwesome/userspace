<?php

class UserFailedLoginAttempt {
    private $id;
    private $userId;
    private $time;
    private $ip;
    private $client;
    private $passwordFailure;
    private $twoFactorFailure;
    private $sequentialFailNo;
}

?>