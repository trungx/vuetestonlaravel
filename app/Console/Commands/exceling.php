<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Cat;
use Excel;
class exceling extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'excel:import';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Bengin command successfully!');

        //var_dump(new Excel());


        $path = public_path().'/Worldwide_Renting_Locations_Addresses_29112018.xlsx';

        Excel::filter('chunk')->noHeading()->load($path)->chunk(250, function($results){
            foreach($results as $row)
            {
                var_dump($row);        
            }
        });
        $this->info('Finish command successfully!');
    }
}
