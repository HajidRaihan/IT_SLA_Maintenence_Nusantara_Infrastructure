<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

                /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'kategori_activity',
        'tanggal',
        'j_hardware',
        'u_hardware',
        'gto',
        'u_gto',
        's_aplikasi',
        'u_aplikasi',
        'a_it',
        'u_it',
        'catatan',
        'shift',
        'lokasi',
        'kategori',
        'kondisi_akhir',
        'biaya',
        'foto',
        'status',
        'first_review_id',
        'second_review_id',
        

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function firstreview()
    {
        return $this->belongsTo(User::class, 'first_review_id');
    }

    public function secondreview()
    {
        return $this->belongsTo(User::class, 'second_review_id');
    }


    public function lokasi()
    {
    	return $this->belongsTo(Lokasi::class);
    }

    public function kategori()
    {
    	return $this->belongsTo(Kategori::class);
    }




    
}
