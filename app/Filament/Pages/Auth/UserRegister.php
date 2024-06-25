<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Auth\Register as FilamentRegister;
use Filament\Support\Enums\MaxWidth;

class UserRegister extends FilamentRegister
{
    protected static string $view = 'filament.pages.auth.register';

    protected static string $layout = 'filament.components.layout.register';

    protected ?string $maxWidth = MaxWidth::FourExtraLarge->value;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('information')
                    ->schema([
                        $this->getNameFormComponent(),

                        $this->getEmailFormComponent(),

                        $this->getPasswordFormComponent(),

                        $this->getPasswordConfirmationFormComponent(),

                        Forms\Components\FileUpload::make('image')
                            ->required()
                            ->image()
                            ->maxFiles(1)
                            ->placeholder('profile_image.jpg'),

                    ]),
            ]);
    }
}
