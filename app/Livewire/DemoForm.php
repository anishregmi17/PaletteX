<?php

namespace App\Livewire;

use Livewire\Component;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Anish\FilamentToolkit\Forms\Components\Section;
use Anish\FilamentToolkit\Forms\Components\ColorPicker;

class DemoForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    { {
            return $form
                ->schema([
                    Section::make('Colors')
                        ->description('Pick your own color scheme for the app.')
                        ->icon('heroicon-o-star')
                        ->schema([
                            ColorPicker::make('primary')
                                ->default('#fbbf24')
                                ->width(100),
                        ])
                        ->columns(2)
                ])
                ->statePath('data');
        }
    }

    public function render()
    {
        return view('livewire.demo-form');
    }
}
