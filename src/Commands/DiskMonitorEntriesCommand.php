<?php

namespace Cybernerdie\DiskMonitorEntries\Commands;

use Illuminate\Console\Command;

class DiskMonitorEntriesCommand extends Command
{
    public $signature = 'disk-monitor-entries';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
