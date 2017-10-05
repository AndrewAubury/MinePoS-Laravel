<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Admin;

class checkpassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minepos:checkpassword {username}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check password against database';

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
        $username = $this->argument('username');
        $models = Admin::where('username',$username)->get();
        if(!isset($models[0])){
            $this->error('ERROR: No User Found!');
            return;
        }
        $model = $models[0];
        if($model->verify_password($this->secret('Password?'))){
            $this->info('Password was correct!');
        }else{
            $this->error('ERROR: Wrong Password!');
        }
    }
}
