<?php

namespace Breeze\Core\Module;

use Zend\Loader\StandardAutoloader;

trait StandardAutoloaderTrait
{
    /**
     * @return array
     */
    public function getAutoloaderConfig(): array
    {
        $namespace = explode('\\', self::class, 2)[0];

        return [
            StandardAutoloader::class => [
                'namespaces' => [
                    $namespace => BASE_PATH . '/module/' . $namespace . '/src',
                ],
            ],
        ];
    }
}
