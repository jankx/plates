<?php

namespace League\Plates\Extension;

if (!defined('ABSPATH')) {
    exit('Cheatin huh?');
}

use League\Plates\Engine;

/**
 * A common interface for extensions.
 */
interface ExtensionInterface
{
    public function register(Engine $engine);
}
