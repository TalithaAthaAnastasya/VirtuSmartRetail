<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanBarang extends Model
{
    use HasFactory;

    protected $table = 'penerimaan_barangs';
    protected $primaryKey = 'id_penerimaan';
    protected $fillable = ['id_po', 'tanggal_terima', 'diterima_oleh', 'status', 'catatan'];
}
