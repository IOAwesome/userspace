<?php
class UserLoginSecurity {
    private $id;
    private $userId;
    private $lastLoginAttempt;
    private $sequentialFailedLogins;
    private $rateLimited;
    private $timeUntilNextAttempt;
}
?>