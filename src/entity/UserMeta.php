<?php

/**
* @Entity
*/
class UserMeta {
    /** @Id @Column(type="string", length=8) */
    private $id;
    
    /** @Column(type="string", length=8) */
    private $userId;
    
    /** @Column(type="string") */
    private $key;
    
    /** @Column(type="string") */
    private $value;
    
    /** @Column(type="datetime") */
    private $lastUpdated;
}

?>