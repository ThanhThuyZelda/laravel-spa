<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Advise extends Model
{
    use HasFactory;
    protected $table = 'tb_advise';
    protected $primaryKey = 'TV_id';
    // public $incrementing = false;
    protected $fillable = ['TV_hoten', 'TV_sdt', 'TV_ttd', 'DV_id'];

    public function Service(){
        return $this->belongsTo(Service::class,'DV_id', 'DV_id');
    }
}
