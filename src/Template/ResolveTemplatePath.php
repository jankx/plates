<?php

namespace League\Plates\Template;

if (!defined('ABSPATH')) {
    exit('Cheating huh?');
}

use League\Plates\Exception\TemplateNotFound;

interface ResolveTemplatePath
{
    /**
     * @throws TemplateNotFound if the template could not be properly resolved to a file path
     */
    public function __invoke(Name $name): string;
}
