<?php

/**
 * @Entity
 */
class UserSession {
    
    /** @Id @Column(type="string", length=8) */
    private $id;                        // Unique ID for session (db only)

    /** @Column(type="string", length=8) */
    private $userId;                    // User the session belongs to

    /** @Column(type="datetime") */
    private $startTime;                 // Time session started

    /** @Column(type="datetime") */
    private $endTime;                   // Time session started

    /** @Column(type="datetime") */
    private $lastActivity;              // Last time user did anything

    /** @Column(type="number") */
    private $sessionTimeout;            // Time until session expires

    /** @Column(type="string") */
    private $phpSessionId;              // Session ID generated by PHP

    /** @Column(type="datetime") */
    private $phpSessionIdCreated;       // Time that session id was generated

    /** @Column(type="number") */
    private $phpSessionIdTimeout;       // Time until key needs changed.

    /** @Column(type="string") */
    private $rememberMe;                // Timeout / Don't Timeout

    /** @Column(type="number") */
    private $rememberMeTimeout;         // Max length a rememberMe will last.

    /** @Column(type="boolean") */
    private $valid;                     // Is session still active

}

?>