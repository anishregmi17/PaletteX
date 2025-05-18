<?php

namespace Anish\FilamentToolkit\Forms\Components;

use Anish\FilamentToolkit\Concerns\CanBeSection;
use Filament\Forms\Components\Component;

class Section extends Component
{
    use CanBeSection;

    protected string $view = 'filament-toolkit::section';
}
