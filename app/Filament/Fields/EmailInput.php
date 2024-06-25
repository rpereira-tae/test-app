<?php

namespace App\Filament\Fields;

use Filament\Forms\Components\TextInput;

class EmailInput implements FilamentInput
{
    public static function make(string $name = 'email'): TextInput
    {
        return TextInput::make($name)
            ->email()
            ->label('Correo electrónico')
            ->placeholder('carlosperez@example.com');
    }
}
