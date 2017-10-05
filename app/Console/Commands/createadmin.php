<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Admin;
use Carbon\Carbon;

class createadmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minepos:createadmin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin account for your MinePoS installation';

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
        //
        $username = $this->ask('Username?','admin');
        $email = $this->ask('Email address?');
        $password = $this->secret('Password?');
        $passwordConfirm = $this->secret('Confirm Password?');
        if($password != $passwordConfirm){
            $this->error('ERROR: The passwords did not match!');
            return;
        }
        $newAccount = new Admin;
        $newAccount->username = $username;
        $newAccount->email = $email;
        $newAccount->password = $password;
        $newAccount->last_login = Carbon::now();
        $newAccount->save();
        $this->info('Account "'.$username.'" has been created!');
    }
}
