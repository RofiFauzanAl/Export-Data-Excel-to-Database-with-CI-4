<?php
namespace App\Models;
use CodeIgniter\Model;

class m_mahasiswa extends Model{
    protected $table = 'raport_mhs';
    protected $primaryKey = 'NIM';
    protected $allowedFields = ['NIM', 'NAMA', 'UTS', 'UAS'];
}

?>