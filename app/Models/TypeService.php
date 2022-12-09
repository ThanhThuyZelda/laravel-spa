<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeService extends Model
{
    use HasFactory;
    protected $table = 'tb_service_type';
    protected $primaryKey = 'type_id';
    // public $incrementing = false;
    protected $fillable = ['type_name'];

public function staff(){
        return $this->hasMany(Staff::class, 'room_id', 'room_id');
    }    
}
