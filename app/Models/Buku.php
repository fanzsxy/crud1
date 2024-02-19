<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table =  "buku";
    protected $primaryKey = "id";
    protected $fillable = ['id','id_kategori','nama_buku','penerbit','tanggal_terbit','created_at','deleted_at'];

  
}
