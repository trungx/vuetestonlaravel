<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Cat;
use Goutte\Client;


class HomeController extends Controller
{
    public function index(){
    	$client = new Client();
    	$crawler = $client->request('GET', 'https://batdongsan.com.vn/tags/ban/nhon-trach');
    	dd($crawler);
    	$crawler->filter('body')->each(function ($node) {
		    print $node->text()."\n";
		});
		dd($crawler);    	

    	$file = 'Worldwide_Renting_Locations_Addresses_29112018.xlsx';
    	$data = Excel::load($file, function($reader) {
    		$reader->takeColumns(10);
		    /* $workbookTitle = $reader->getTitle();

	        foreach($reader as $sheet)
	        {
	            // get sheet title
	            $sheetTitle = $sheet->getTitle();
	            dd($sheetTitle,$workbookTitle);
	        }*/

		})->get();
		dd($data);
        /*$a = new Excel;
        dd($a);*/
    }
}
