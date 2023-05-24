<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class TableComposer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:composer {table_name : Le nom de la table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Créer migration,controller,observer,repository,factory,seeder,pour une table';

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
     * @return int
     */
    public function handle()
    {

        $table_name= $this->argument('table_name');
        Artisan::call('make:model', [
            'name' => ucfirst($table_name)."_table"
            , '--queue' => 'migration'
        ]);

        $table_name= $this->argument('table_name');
        Artisan::call('make:migration', [
            'name' => "create_".$table_name."_table"
        ]);

        Artisan::call('make:controller', [
            'name' => ucfirst($name)."Controller"
            , '--queue' => '--model=Photo'
            , '--queue' => '--resource'
            , '--queue' => '--request'
        ]);

        Artisan::call('make:repository', [
            'name' => ucfirst($name)."Repository"
           ,'model' => $name
        ]);

        Artisan::call('make:observer', [
            'name' => ucfirst($name)."Observer"
        ]);

        Artisan::call('make:factory', [
            'name' => ucfirst($name)."Factory"
        ]);

        Artisan::call('make:seeder', [
            'name' => ucfirst($name)."Seeder"
        ]);
    }
}
