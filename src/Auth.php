<?php
namespace ioawesome\userspace;

class Auth
{
    public function __construct($args)
    {
        echo "<br />Construct";
        if( count($args) > 0 ) {
            foreach ($args as $key => $val) {
                echo sprintf("Key: %s Val: %s <br />", $key, $val);
            }
        }
    }

    public function HelloWorld() {
        echo "This shit is bananas";
    }
}

?>