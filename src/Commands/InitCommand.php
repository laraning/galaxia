<?php

namespace Laraning\Galaxia\Commands;

use Illuminate\Console\Command;
use Laraning\Galaxia\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'galaxia:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Makes all pre-checks, and configures Galaxia to be fully functional.';

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
        $this->info('*** Galaxia requisites and startup configuration check. ***');

        // Database connectivity?
        try {
            DB::select(DB::raw('select version()'));
            $this->info('-- DB connectivity test: OK --');
        } catch (\Exception $e) {
            $this->error('Ups! Looks like you don\'t have database connectivity. Check your database connection parameters please.');
            return;
        }

        // Verify/create permissions and roles (permission=access, role=admin) for Galaxia guard.
        if (!Permission::where('guard_name', 'galaxia')
                     ->where('name', 'access')->exists()) {
            Permission::create(['name' => 'access', "guard_name" => glxguard()]);
            $this->info('-- Galaxia permission \'access\': OK --');
        };

        if (!Role::where('guard_name', 'galaxia')
                     ->where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin', "guard_name" => glxguard()]);
            $this->info('-- Galaxia role \'admin\': OK --');
        };

        // Assign default access permission to admin role.
        $role = Role::findByName('admin', glxguard());
        if (!$role->hasPermissionTo('access', glxguard())) {
            $role->givePermissionTo('access');
        };

        // Verify if the configured authentication gate exists.
        try {
            $guard = Auth::guard(glxguard());
            $this->info('-- Auth configuration check: OK --');
        } catch (\Exception $e) {
            $this->error('Ups! Looks like the current registered Galaxia guard is not configured in your auth.php config file. Please check it out.');
            return;
        };

        $this->info('');
        $this->info('');

        $this->info('Configuration checked and startup scripts ran successfully. You\'re ready to use Galaxia!');
        $this->info('If your database is empty, you should run galaxia:create-user command to create your first user.');
        $this->info('If you want to allow one of your existing users to access Galaxia, please run galaxia:give-access command.');

        $this->info('');
        $this->info('');
    }
}
