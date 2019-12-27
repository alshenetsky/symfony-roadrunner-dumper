<?php

namespace SymfonyRoadrunner\Exception;

class Dump extends \Exception {

    private $dump = [];

    public function addDump($dump){
        $this->dump[] = $dump;
    }

    public function __toString()
    {
        return implode(\PHP_EOL, $this->dump);
    }

}
