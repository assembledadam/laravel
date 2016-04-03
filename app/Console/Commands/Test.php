<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testcase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dingo API bug test case';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dispatcher = app('Dingo\Api\Dispatcher');

        $dispatcher->get('test/this-is-a-valid-route');
    }
}
