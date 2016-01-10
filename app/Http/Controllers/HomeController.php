<?php 

namespace App\Http\Controllers;

use App\Models\kabupaten;
use App\Models\provinsi;
use App\Http\Controllers\Controller;
use Request;
use Input;

class HomeController extends Controller
{

	public function index(){
		$data['data'] = provinsi::all();
	    return view('index', $data);
	}

	public function getkotabyid(){
		if ( Request::ajax() ) {
			$req = Request::all();

			$data = kabupaten::where('id_prov', '=', $req['provinsi'])->get();
			$option = '';
			foreach ($data as $row) {
				$option = $option . '<option value="' . $row->id_kab . '">' . $row->nama . '</option>';
			}

			print_r($option);
		}
	}

}