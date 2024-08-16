<?php

namespace Untek\Component\Translation\Interfaces\Services;

interface TranslationServiceInterface
{

    public function getLanguage(): string;

    public function setLanguage(string $language, string $fallback = null);

    public function getDefaultLanguage(): string;

    public function t(string $bundleName, string $key, array $variables = []);
    
}
