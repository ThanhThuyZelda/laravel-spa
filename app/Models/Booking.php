<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Bill;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'tb_booking';
    protected $primaryKey = 'DL_id';
    // public $incrementing = false;
    protected $fillable = ['DL_hoten', 'DL_sdt', 'DL_email', 'DL_diachi', 'DL_thoigian','DV_id'];

    public function Service(){
        return $this->belongsTo(Service::class,'DV_id', 'DV_id');
    }
    public function bill(){
        return $this->hasMany(Bill::class, 'DL_id', 'DL_id');
    }
}
