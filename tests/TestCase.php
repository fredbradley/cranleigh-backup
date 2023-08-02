<?php

namespace FredBradley\CranleighBackup\Tests;

use FredBradley\CranleighBackup\CranleighBackupServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            CranleighBackupServiceProvider::class,
        ];
    }
}
