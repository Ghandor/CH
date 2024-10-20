<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LocaleFfAdlmCm - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFfAdlmNe extends LocaleFfAdlm
{
    public function territory()
    {
        return new TerritoryNe();
    }
}
