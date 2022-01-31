<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Client;

class ApiController extends Controller
{
   public function getCompanies() {
        return Company::all();
       
   }

   public function getClients($id) {
       $clients = Client::where('id_company', $id)->get();
       return $clients;
   }

    public function getClientCompanies($id) {
         $clients = Client::where('id', $id)->first();
        return $clients->company['name'];
    }
}
