<?php

namespace League\Plates\Extension;

if (!defined('ABSPATH')) {
    exit('Cheating huh?');
}

use League\Plates\Engine;

/**
 * A common interface for extensions.
 */
interface ExtensionInterface
{
    public function register(Engine $engine);
}
