<?php
class UserLoginSecurity {
    /** @Id @Column(type="string", length=8) */
    private $id;
    
    /** @Column(type="string", length=8) */
    private $userId;

    /** @Column(type="datetime") */
    private $lastLoginAttempt;

    /** @Column(type="number") */
    private $sequentialFailedLogins;

    /** @Column(type="boolean") */
    private $rateLimited;

    /** @Column(type="number") */
    private $timeUntilNextAttempt;
}
?>