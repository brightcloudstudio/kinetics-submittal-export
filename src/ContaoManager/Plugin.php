<?php

namespace KineticsSubmittalExport\ContaoManager;

use KineticsSubmittalExport\KineticsSubmittalExportBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(KineticsSubmittalExportBundle::class)->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
