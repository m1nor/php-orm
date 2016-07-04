<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RsORM\Query\Engine\MySQL\Func;

class Count extends AbstractUnaryFunction {
    
    /**
     * @return string
     */
    protected function _function() {
        return "COUNT";
    }
    
}
