<?php

namespace Shopware\Themes\Standard;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Das Standard-Theme des Online-Shops
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Das Standard-Theme des Online-Shops wird mit blauer Farbe versehen.
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
Philip Stanišić
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;

    public function createConfig(Form\Container\TabContainer $container)
    {
    }

    protected $javascript = [
        'src/js/style.js'
    ];

}