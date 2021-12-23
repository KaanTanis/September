<?php

namespace KaanTanis\September;

use Illuminate\Support\Facades\Facade;

/**
 * Log level class
 */
class Level extends Facade
{
    /**
     * @var
     */
    public $level;

    /**
     * Default value
     */
    public function __construct()
    {
        $this->debug();
        return $this;
    }

    /**
     * @return $this
     */
    public function debug()
    {
        $this->level = 0;
        return $this;
    }

    /**
     * @return $this
     */
    public function info()
    {
        $this->level = 1;
        return $this;
    }

    /**
     * @return $this
     */
    public function warning()
    {
        $this->level = 2;
        return $this;
    }

    /**
     * @return $this
     */
    public function danger()
    {
        $this->level = 3;
        return $this;
    }
}
