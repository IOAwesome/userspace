<?php

/**
* @Entity
*/
class UserMeta {
    /** @Column(type="string") */
    private $id;
    
    /** @Column(type="string") */
    private $userId;
    
    /** @Column(type="string") */
    private $key;
    
    /** @Column(type="string") */
    private $value;
    
    /** @Column(type="datetime") */
    private $lastUpdated;
}

?>