<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Staff;

class News extends Model
{
    use HasFactory;

    protected $table = 'tb_news';
    protected $primaryKey = 'TT_id';
    // public $incrementing = false;
    protected $fillable = ['TT_img', 'TT_name', 'TT_date', 'TT_des', 'TT_content','NV_id'];
    public function nhanvien(){
        return $this->belongsTo(Staff::class);
    }

}
