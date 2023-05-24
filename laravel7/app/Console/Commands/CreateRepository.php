<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {class_name : Le nom de la classe} {model_name? : Le nom du model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Créer une classe repository';

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
        $dossier="app/http/Repositories";

        if (!file_exists($dossier)) {
            mkdir($dossier, 0777, true);
        }

       $className=$this->argument('class_name');
       $myfile = fopen($dossier."/".$className.".php", "a") or die("Unable to open file!");
       $txt = "<?php\n";
       fwrite($myfile, $txt);
       $txt = "namespace App\Http\Repositories;\n\n";
       fwrite($myfile, $txt);

       if ($this->argument('model_name')!=null) {
            $modelName=$this->argument('model_name');
           $txt = "use App\Models\\".$modelName.";\n";
           fwrite($myfile, $txt);
       }

       $txt = "use Illuminate\Support\Facades\DB;\n\n";
       fwrite($myfile, $txt);
       $txt = "class ".$className."\n";
       fwrite($myfile, $txt);
       $txt = "{\n";
       fwrite($myfile, $txt);
       $txt = "\t/**\n\t* Display a listing of the table.\n\t*\n\t*/\n";
       fwrite($myfile, $txt);
       $txt = "\tpublic function all(){\n\n";
       fwrite($myfile, $txt);
       $txt = "\t}\n";
       fwrite($myfile, $txt);
       $txt = "}\n\n";
       fwrite($myfile, $txt);
       fclose($myfile);


       $this->info("Repository généré dans le dossier $dossier");

    }
}
