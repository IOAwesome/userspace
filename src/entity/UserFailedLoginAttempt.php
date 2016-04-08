<?php

/**
 * @Entity
 */
class UserFailedLoginAttempt {
    /** @Id @Column(type="string", length=8) */
    private $id;

    /** @Column(type="string", length=8) */
    private $userId;

    /** @Column(type="datetime") */
    private $time;

    /** @Column(type="string") */
    private $ip;

    /** @Column(type="string") */
    private $client;

    /** @Column(type="boolean") */
    private $passwordFailure;

    /** @Column(type="string") */
    private $twoFactorFailure;

    /** @Column(type="number", length=2) */
    private $sequentialFailNo;
}

?>