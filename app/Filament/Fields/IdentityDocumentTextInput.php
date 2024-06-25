<?php

namespace App\Filament\Fields;

use Filament\Forms\Components\TextInput;

class IdentityDocumentTextInput implements FilamentInput
{
    public static function make(string $name = 'identity_document'): TextInput
    {
        return TextInput::make($name)
            ->label('Documento de identidad')
            ->placeholder('12345678')
            ->hint('12345678');
    }
}
