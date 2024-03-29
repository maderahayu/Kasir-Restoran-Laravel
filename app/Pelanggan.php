<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{

    protected $table = 'costumers';
    protected $fillable =['id','nama','jenis_kelamin','no_hp','alamat','created_at','update_at'];
    
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
