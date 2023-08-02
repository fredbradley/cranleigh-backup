<?php

namespace FredBradley\CranleighBackup;

use Exception;

class CranleighBackup
{
    public function getDiskName(): bool
    {
        return 'cranleigh-backup';
    }

    /**
     * @throws Exception
     */
    public function getHostname(): string
    {
        if (! is_string(config('app.url'))) {
            throw new Exception('No Hostname set in config/app.php');
        }
        $url = parse_url(config('app.url'));
        if (isset($url['host'])) {
            return $url['host'];
        }
        throw new Exception('No Hostname set in config/app.php');
    }
}
