<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RsORM\Query\Engine\MySQL\Argument;

use RsORM\Query\Engine\MySQL;

class Any implements MySQL\ObjectInterface {
    
    /**
     * @return string
     */
    public function prepare() {
        return "*";
    }
    
}
