<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Untek\Component\Translation\Interfaces\Services\TranslationServiceInterface;
use Untek\Component\Translation\Services\NullTranslationService;

return static function (ContainerConfigurator $configurator): void {
    $services = $configurator->services();

    $services->set(TranslationServiceInterface::class, NullTranslationService::class);
};