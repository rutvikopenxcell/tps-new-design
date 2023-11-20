<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

class sendCronMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendemail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Mail::to('example12312@example.com')->from('examplexyz@example.com')
        ->view('emailmanagement.testemail')
        ->subject('Test Mail');
         
    }
}
