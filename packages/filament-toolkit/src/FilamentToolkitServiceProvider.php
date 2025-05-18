<?php

namespace Anish\FilamentToolkit;

use Filament\Support\Assets\Js;
use Spatie\LaravelPackageTools\Package;
use Filament\Support\Facades\FilamentAsset;

class FilamentToolkitServiceProvider extends \Spatie\LaravelPackageTools\PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-toolkit')
            ->hasViews();
    }

    public function packageBooted()
    {
        FilamentAsset::register([
            Js::make('iro', __DIR__ . '/../dist/iro.js'),
        ], 'anish/filament-toolkit');
    }
}
