<?php

namespace Laraning\Galaxia\Commands;

use Illuminate\Console\Command;
use Laraning\Galaxia\Models\User;
use Illuminate\Support\Facades\DB;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'galaxia:create-user {--admin : Creates user with Galaxia admin role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin user in your Galaxia admin framework.';

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
        $this->info('');
        $this->info('');

        // Database connectivity?
        try {
            DB::select(DB::raw('select version()'));
        } catch (\Exception $e) {
            $this->error('Ups! Looks like you don\'t have database connectivity. Check your database connection parameters please.');
            return;
        }

        $out = false;
        while ($out == false) {
            $name = $this->ask('Please enter your user NAME');
            if (strlen($name) > 2) {
                $out = true;
            } else {
                $this->error('Please write at least 2 characters and try again.');
            }
        }

        $out = false;
        while ($out == false) {
            $email = $this->ask('Please enter your user EMAIL');
            $out = true;

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->error('Invalid email format! Please try again.');
                $out = false;
            }

            if (User::where('email', $email)->exists()) {
                $this->error('This email already exists. Please try again.');
                $out = false;
            };
        }

        $out = false;
        while ($out == false) {
            $password = $this->ask('Please enter your user PASSWORD (min 6 chars)');

            if (strlen($password < 6)) {
                $out = true;
            } else {
                $this->error('Please enter at least 6 characters. Please try again.');
            };
        };

        // Create and assign minimal permissions.
        $user = User::create(['name'     => $name,
                              'email'    => $email,
                              'password' => bcrypt($password)]);

        // Admin?
        if ($this->option('admin')) {
            $user->assignRole('admin');
        } else {
            $user->givePermissionTo('access');
        }

        if ($user) {
            $this->info('User successfully added!');
        };

        $this->info('');
        $this->info('');
    }
}
