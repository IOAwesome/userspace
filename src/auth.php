<?php
namespace ioawesome\userspace;

/**
 * Class AuthModule
 * @package ioawesome\userspace
 */
class AuthModule {
    private $_cookieManager;
    private $_currentUser;

    public function __construct($args)
    {
        // Check Arguments

        // Then initialize
        $this->init();
    }

    public function init() {
        $this->_cookieManager = new CookieManager();


    }

    public function getCurrentUser() {
        $_p_userkey = "";


    }

    public function createEmptyUser() {

    }

    public function retrieveUser() {

    }
}

class SessionManager {
    private $_id;
    private $_status;

    /*
     * Check for an existing session and retrieve related info
     */
    public function __construct($args)
    {
        session_start();
    }

    /**
     * If cookie exists, extract the id of the user
     * @return String
     */
    public function getUserId() {

    }

    /**
     * If Cookie exists, extract the authcode
     * @return String
     */
    public function getSessionId() {

    }

    private function _isSessionValid() {

    }

    /**
     * Retrieve Session info from the database
     * @return SessionObject
     */
    private function _getSessionInfo() {

    }


}

/**
 * Class SessionObject
 * @package ioawesome\userspace
 * description: Holds meta information about the session
 */
class Session {
    private $id;
    private $sessionId;             // PHP Session ID
    private $rememberMeId;          // ID for "stay logged in"
    private $sessionExpires;        // Timeout for session
    private $forceLogin;            // Force Login after expired session?
    private $idExpires;             // When does current id need renewed?
    private $lastLogin;             // Timestamp of last login
    private $lastAction;            // Last time user did anything requiring auth
}

class SessionStatusType {
    const ValidNoActionRequired = 0;    // Cookie is valid, user is logged in
    const ValidIssueNewToken = 1;       // Cookie is valid but needs renewed (replay protection)
    const ValidLoggedOut = 2;           // Cookie is valid, but user has logged out
    const ValidTimeout = 3;             // Cookie is valid, session timed out
    const Invalid = 4;                  // Cookie isn't registered with system

}

?>