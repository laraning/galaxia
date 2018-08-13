<?php

namespace Laraning\Galaxia\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class DeployAuthCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'galaxia:deploy-auth';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deploys auth.php configuration file. Overrides your auth.php so please use it carefully.';

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
        $this->info('*** Galaxia auth.php configuration file deploy ***');

        $this->info('');
        $this->info('');

        if ($this->confirm('This operation will override your auth.php file. Do you want to continue?')) {
            if (File::copy(package_path('Configuration/auth.php'), base_path('config/auth.php'))) {
                $this->info('File copied.');
            };
        };

        $this->info('');
        $this->info('');
    }
}
