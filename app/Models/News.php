<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use HasFactory;
    public $table = "news";
    protected $guarded = ['id'];
    
    // menampilkan data gambar beserta link akses filenya
    // public function getGambarAttribute($value)
    // {
    //     return url(Storage::url($value));
    // }

    public function services()
    {
        return $this->hasOne(Service::class,'id','id_servis')->withDefault(['servis' => 'Service Not Found']);
    }
}