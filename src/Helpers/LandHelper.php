<?php

namespace OpenDominion\Helpers;

use OpenDominion\Models\Race;

class LandHelper
{
    public function getLandTypes()
    {
        return [
            'plain' => 'Plains',
            'mountain' => 'Mountains',
            'swamp' => 'Swamp',
            'cavern' => 'Caverns',
            'forest' => 'Forests',
            'hill' => 'Hills',
            'water' => 'Water',
        ];
    }

    public function getLandTypeForBuildingByRace($building, Race $race)
    {
        return []; // todo
    }
}
