<?php

namespace Laraning\Galaxia\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Laraning\Galaxia\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
            $this->info('-- DB connectivity check: OK --');
        } catch (\Exception $e) {
            $this->error('Ups! Looks like you don\'t have database connectivity. Check your database connection parameters please.');

            return;
        }

        // Spatie permissions installed?
        if (!class_exists('Spatie\Permission\Models\Permission')) {
            $this->error('Spatie Permissions check: ERROR! Your Spatie permissions package is not installed. Please check this package installation.');

            return;
        } else {
            $this->info('-- Spatie permissions classes check: OK --');
        }

        if (!Schema::hasTable(config('permission.table_names.roles')) ||
           !Schema::hasTable(config('permission.table_names.permissions')) ||
           !Schema::hasTable(config('permission.table_names.model_has_permissions')) ||
           !Schema::hasTable(config('permission.table_names.model_has_roles')) ||
           !Schema::hasTable(config('permission.table_names.role_has_permissions'))) {
            $this->error('Spatie permission classes check: ERROR! Your Spatie permissions package don\'t have tables. Did you run the package migration?');

            return;
        } else {
            $this->info('-- Spatie permission classes check: OK --');
        }

        // Verify/create permissions and roles (permission=access, role=admin) for Galaxia guard.
        if (!Permission::where('guard_name', 'galaxia')
                     ->where('name', 'access')->exists()) {
            Permission::create(['name' => 'access', 'guard_name' => glxguard()]);
            $this->info('-- Galaxia permission \'access\' check: OK --');
        }

        if (!Role::where('guard_name', 'galaxia')
                     ->where('name', 'galaxia-admin')->exists()) {
            Role::create(['name' => 'galaxia-admin', 'guard_name' => glxguard()]);
            $this->info('-- Galaxia role \'admin\' check: OK --');
        }

        // Assign default access permission to admin role.
        $role = Role::findByName('galaxia-admin', glxguard());
        if (!$role->hasPermissionTo('access', glxguard())) {
            $role->givePermissionTo('access');
        }

        // Verify if the configured authentication gate exists.
        try {
            $guard = Auth::guard(glxguard());
            $this->info('-- Auth configuration check: OK --');
        } catch (\Exception $e) {
            $this->error('Auth configuration check: ERROR! Galaxia auth gate don\'t exist in your auth.php configuration file. Please run galaxia:deploy-auth command.');

            return;
        }

        $this->info('');
        $this->info('');

        $this->info('Configuration checked and startup scripts ran successfully. You\'re ready to use Galaxia!');
        $this->info('If your database is empty, you should run galaxia:create-user command to create your first user.');
        $this->info('If you want to allow one of your existing users to access Galaxia, please run galaxia:give-access command.');

        $this->info('');
        $this->info('');
    }
}
