<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Models\Staff;

class Room extends Model
{
    use HasFactory, Searchable;
    protected $table = 'tb_room';
    protected $primaryKey = 'room_id';
    // public $incrementing = false;
    protected $fillable = ['room_name'];

    public function nhanvien(){
        return $this->hasMany(Staff::class);
    }

    

}
