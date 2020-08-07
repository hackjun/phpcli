<?php
namespace Jett\PhpCli;

use Jett\PhpCli\Cli\Exception\CliException;

final class Cli
{
    static private $instance;
    static private $config;

    /**
     * 初始化服务
     */
    private function init()
    {
    }

    /**
     * 编译依赖
     */
    private function build()
    {
    }

    public static function make()
    {
        if (self::$instance) {
            return self::$instance;
        }

        return self::$instance = new Cli();
    }

    public function config($config)
    {
        return $this;
    }

    /**
     * 运行
     */
    public function run()
    {
        try {
            $this->init();
            $this->build();
        } catch (CliException $exception) {
            echo $exception;
        }
    }
}
