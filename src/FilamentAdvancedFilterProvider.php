<?php

namespace Webbingbrasil\FilamentAdvancedFilter;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentAdvancedFilterProvider extends PluginServiceProvider
{
    public static string $name = 'filament-2fa';

    public function packageConfigured(Package $package): void
    {

    }
}
