<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Technician extends Model
{
     
    

    protected $table = 'technicians';

    public $primaryKey = 'email';

    public $timestamps = true;

    protected $fillable = [
        'uemail','birth','join_date','type',
    ];

    protected $hidden = [
        'bank_act',
    ];

    public function user(){
          return $this->belongsTo('App\User');
    }

    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function complains(){
        return $this->hasMany('App\Complain');
    }
}
