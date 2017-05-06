<?php

namespace Breeze\Core;

/**
 * Class Module
 */
class Module
{
    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '../config/module.config.php';
    }
}
