<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Models\Room;
use App\Models\Position;
use App\Models\News;


class Staff extends Model
{
    use HasFactory, Searchable;

    protected $table = 'tb_staff';
    protected $primaryKey = 'NV_id';
    protected $fillable = ['avatar','fullname','email','password','gender','phone','room_id','CV_id'];

    public function phong(){
        return $this->belongsTo(Room::class);
    }
    public function chucvu(){
        return $this->belongsTo(Position::class);
    }
    public function news(){
        return $this->hasMany(News::class, 'TT_id', 'TT_id');
    }
}
