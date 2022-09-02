<?php

namespace Cybernerdie\DiskMonitorEntries\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cybernerdie\DiskMonitorEntries\DiskMonitorEntries
 */
class DiskMonitorEntries extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Cybernerdie\DiskMonitorEntries\DiskMonitorEntries::class;
    }
}
