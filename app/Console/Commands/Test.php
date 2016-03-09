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
        try {
            \API::get('non-existant-route');

        } catch (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e) {

            \API::get('test/this-is-a-valid-route');

            /*
              Produces:

              [Symfony\Component\Debug\Exception\FatalErrorException]
                Call to a member function getUri() on null
             */

            // the below (alternatively) also fails
            // print \APIRoute::current();
        }
    }
}
