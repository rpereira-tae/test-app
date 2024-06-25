<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Collection;

enum IdentityDocumentTypeEnum: string implements HasLabel
{
    case V = 'V';

    case E = 'E';

    case J = 'J';

    case G = 'G';

    public function getLabel(): string
    {
        return match ($this) {
            self::V => 'Venezolano',
            self::E => 'Extranjero',
            self::J => 'Jurídico',
            self::G => 'Gobierno',
        };
    }

    public static function all(): Collection
    {
        return collect([
            self::V,
            self::E,
            self::J,
            self::G,
        ]);
    }
}
