<?php

namespace Jett\PhpCli\Cli\Exception;

class CliException extends \Exception
{
    public static function thrMsg($msg, $code = -1)
    {
        throw new CliException($msg, $code);
    }
    
    public function __toString()
    {
        return $this->getFile() . ":" . $this->getLine() . '|' . $this->getMessage();
    }
}
