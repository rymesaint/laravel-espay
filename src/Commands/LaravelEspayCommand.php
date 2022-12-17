<?php

namespace Rymesaint\LaravelEspay\Commands;

use Illuminate\Console\Command;

class LaravelEspayCommand extends Command
{
    public $signature = 'laravel-espay';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
