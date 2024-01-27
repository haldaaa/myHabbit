<?php

namespace App\Console\Commands;

use App\Http\Controllers\CommandeController; 
use App\Http\Controllers\TourController; 
use Illuminate\Console\Command;

class GenerateCommande extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:commande';

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
     * @return int
     */
    public function handle()
    {
       
       // $commandeController = new CommandeController();
        //$commandeController->generateRandomCommande();
    
        $tour = new TourController();
        $tour->startTour();

        $this->info('COUCOUCOUCOUCCommandes aléatoires générées avec succès.');
    
        return 0;
    }
    
}
