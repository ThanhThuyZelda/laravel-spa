<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeService;
use App\Models\Booking;
use App\Models\Advise;

class Service extends Model
{
    use HasFactory;
    protected $table = 'tb_service';
    protected $primaryKey = 'DV_id';
    // public $incrementing = false;
    protected $fillable = ['DV_name', 'Dv_gia', 'DV_mota','DV_nd','type_id'];

    public function typeService(){
        return $this->belongsTo(TypeService::class,'type_id','type_id');
    }
    public function booking(){
        return $this->hasMany(Booking::class, 'DL_id', 'DL_id');
    }
    public function advise(){
        return $this->hasMany(Advise::class, 'DL_id', 'DL_id');
    }
}
