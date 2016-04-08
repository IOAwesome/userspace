<?php
namespace ioawesome\userspace;

class Auth
{
    /**
     * Auth constructor.
     * @param $db
     * @param $args
     * @throws
     */
    public function __construct($args)
    {
        if( count($args) > 0 ) {
            foreach ($args as $key => $val) {
                // Do something with the arguments
            }
        }
    }


}



?>