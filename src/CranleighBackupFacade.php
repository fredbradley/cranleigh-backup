<?php

namespace FredBradley\CranleighBackup;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FredBradley\CranleighBackup\Skeleton\SkeletonClass
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
