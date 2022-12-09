<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Models\Staff;

class Position extends Model
{
    use HasFactory, Searchable;
    protected $table = 'tb_position';
    protected $primaryKey = 'CV_id';
    protected $fillable = ['CV_name'];

    public function nhanvien(){
        return $this->hasMany(Staff::class);
    }
}
