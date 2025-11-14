<?php

declare(strict_types=1);

namespace Kanvas\Connectors\EchoPay\Enums;

enum ErrorsEnum: string
{
    case ECI_06 = 'ECI_06';
    case ECI_07 = 'ECI_07';

    public function getUserMessage(): string
    {
        return match($this) {
            self::ECI_06 => 'Authentication could not be completed. The card or the card issuer does not currently support 3D Secure (ECI 06). Try another payment method or contact your card issuer for assistance.',
            self::ECI_07 => 'Authentication not attempted. The merchant does not support 3D Secure.',
            default => 'An unknown authentication error occurred.',
        };
    }
}
