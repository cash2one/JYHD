<?php
/**
 * Auto generated from PB_game_config.proto at 2017-09-01 04:58:31
 */

namespace {
/**
 * PB_LevelType enum
 */
final class PB_LevelType
{
    const Level_None = -1;
    const Level_Gun10 = 1;
    const Level_Gun100 = 2;
    const Level_Gun1000 = 3;
    const Level_Gun10000 = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Level_None' => self::Level_None,
            'Level_Gun10' => self::Level_Gun10,
            'Level_Gun100' => self::Level_Gun100,
            'Level_Gun1000' => self::Level_Gun1000,
            'Level_Gun10000' => self::Level_Gun10000,
        );
    }
}
}