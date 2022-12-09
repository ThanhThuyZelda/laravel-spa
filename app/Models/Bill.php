<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
class Bill extends Model
{
    use HasFactory;
    protected $table = 'tb_bill';
    protected $primaryKey = 'HD_id';
    // public $incrementing = false;
    protected $fillable = ['HD_tratruoc', 'HD_ton', 'HD_active', 'DL_id'];

    public function booking(){
        return $this->belongsTo(Booking::class,'DL_id', 'DL_id');
    }

}
