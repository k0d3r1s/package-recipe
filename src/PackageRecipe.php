<?php declare(strict_types = 1);

namespace Koderis;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

final readonly class PackageRecipe implements PluginInterface
{
    public function activate(private Composer $composer, private IOInterface $io): void
    {
    }
}
