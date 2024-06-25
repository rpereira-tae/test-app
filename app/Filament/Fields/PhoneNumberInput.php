<?php

namespace App\Filament\Fields;

use Filament\Forms\Components\TextInput;
use Filament\Support\RawJs;

class PhoneNumberInput implements FilamentInput
{
    public static function make(string $name = 'phone_number'): TextInput
    {
        return TextInput::make($name)
            ->label('Número de teléfono')
            ->placeholder('+584241234567')
            ->default('+58')
            ->mask(RawJs::make(<<<'JS'
                '+589999999999'
            JS))
            ->regex('/^\+58(412|414|424|416|426)\d{7}$/');
    }
}
