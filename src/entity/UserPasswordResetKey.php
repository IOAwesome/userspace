<?php

/**
 * @Entity
 */
class UserPasswordResetKey {
    /** @Id @Column(type="string", length=8) */
    private $id;

    /** @Column(type="string", length=8) */
    private $userId;

    /** @Column(type="string") */
    private $key;

    /** @Column(type="datetime") */
    private $dateIssued;

    /** @Id @Column(type="boolean") */
    private $enabled;
}

?>