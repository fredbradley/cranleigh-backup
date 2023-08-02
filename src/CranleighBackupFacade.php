<?php

namespace FredBradley\CranleighBackup;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FredBradley\CranleighBackup\CranleighBackup
 *
 * @method static string getDiskName(): string
 * @method static string getHostname(): string
 */
class CranleighBackupFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cranleigh-backup';
    }
}
