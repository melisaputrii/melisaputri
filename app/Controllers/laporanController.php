<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\pesananmodel;

class LaporanController extends Controller{
    function __construct()
    {
        $this->Laporan = new PesananModel();
    }
    public function tampil()
    {
        $data['data']= $this->Laporan->findAll();
        return view ('Laporan',$data); 
    }
}
   

    

