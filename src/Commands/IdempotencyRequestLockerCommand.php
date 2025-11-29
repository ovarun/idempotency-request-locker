<?php

namespace Ovarun\IdempotencyRequestLocker\Commands;

use Illuminate\Console\Command;

class IdempotencyRequestLockerCommand extends Command
{
    public $signature = 'idempotency-request-locker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
