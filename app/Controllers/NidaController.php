<?php

namespace App\Controllers;


use GuzzleHttp\Client;
use App\Controllers\BaseController;



class NidaController extends BaseController
{
    public function index()
    {


        $client = new Client();
        $nationalId = $this->request->getVar('nationalId');
        $url = 'https://ors.brela.go.tz/um/load/load_nida/' . $nationalId;
        $res = $client->request('POST', $url);
        $data  = json_decode($res->getBody(),true);
        
        return $this->response->setJSON(['data' => $data]);
        //
    }

    public function nida()
    {
        return view('nida');
         
    }
}
