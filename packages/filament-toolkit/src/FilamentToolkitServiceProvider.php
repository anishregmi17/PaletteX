<?php

namespace Anish\FilamentToolkit;

use Filament\Support\Assets\AlpineComponent;
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
            AlpineComponent::make('color-picker', __DIR__ . '/../dist/iro.js'),
        ], 'anish/filament-toolkit');
    }
}
