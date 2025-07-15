<?php

declare(strict_types=1);

namespace YacDev\FrontendTemplate\EventListener;

use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Setup\Event\AddJavaScriptModulesEvent;

#[AsEventListener(
    identifier: 'yac-dev/add-javascript-module-event-listener',
)]
final readonly class AddJavaScriptModuleEventListener
{
    // The name of JavaScript module to be loaded
    private const MODULE_NAME = '@yac-dev/frontendtemplate/main';

    public function __invoke(AddJavaScriptModulesEvent $event): void
    {
        if (in_array(self::MODULE_NAME, $event->getJavaScriptModules(), true)) {
            return;
        }
        $event->addJavaScriptModule(self::MODULE_NAME);
    }
}
