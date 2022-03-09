<?php 
namespace App\Models;

use CodeIgniter\Model;

class DetailPesananModel extends Model{
    protected $table      = 'tb_detail_pesanan';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_detail';
    protected $allowedFields = ['detail_id','transaksi_id','menu_id','jumlah'];
}