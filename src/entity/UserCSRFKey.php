<?php

/**
 * @Entity
 */
class UserCSRFKey {
    /** @Id @Column(type="string", length=8) */
    private $id;
    
    /** @Column(type="string") */
    private $sessionId;
    
    /** @Column(type="string") */
    private $key;
}

?>