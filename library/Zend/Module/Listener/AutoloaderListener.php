<?php

namespace Zend\Module\Listener;

use Zend\Loader\AutoloaderFactory,
    Zend\Module\Consumer\AutoloaderProvider,
    Zend\Module\ModuleEvent;

class AutoloaderListener extends AbstractListener
{

    /**
     * @param \Zend\Module\ModuleEvent $e
     * @return void
     */
    public function __invoke(ModuleEvent $e)
    {
        $module = $e->getModule();
        if (!$module instanceof AutoloaderProvider) {
            return;
        }
        $autoloaderConfig = $module->getAutoloaderConfig();
        AutoloaderFactory::factory($autoloaderConfig);
    }
}
