<?php

namespace Laraning\Galaxia\Commands;

use Illuminate\Console\Command;
use Laraning\Galaxia\Models\User;
use Spatie\Permission\Models\Role;

class GiveAccessCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'galaxia:give-access {--admin : Gives access to Galaxia as admin}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gives Galaxia access to a specific user id.';

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
        $this->info('*** Galaxia User access assignment ***');

        $out = false;
        while ($out == false) {
            $id = $this->ask('Please enter the User ID that you want to give access to');

            try {
                $user = $model = User::findOrFail($id);
                $out = true;
            } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
                $this->error('User ID no found. Please try again.');
            }
        }

        // Admin? Check/Assign role.
        if ($this->option('admin') && !$user->hasRole('admin', glxguard())) {
            $user->assignRole('admin');
        }

        if (!$this->option('admin') && !$user->hasPermissionTo('access', glxguard())) {
            $user->givePermissionTo('access');
        }

        $this->info('');
        $this->info('');

        $this->info('User ID {<1use></1use>r->id} received permissions to access Galaxia.');

        $this->info('');
        $this->info('');
    }
}
