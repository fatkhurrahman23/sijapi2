<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun_akademik extends Model
{
    use HasFactory;

    protected $table = 'tahun_akademik';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_tahun_akademik', 'tahun_akademik', 'status'];

    public function enrollment(){
        return $this->hasMany('app\Models\Enrollment.php', 'kode_tahun_akademik');
    }
}
