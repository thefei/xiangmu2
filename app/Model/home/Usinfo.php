<?php

namespace App\Model\home;

use Illuminate\Database\Eloquent\Model;

class Usinfo extends Model
{
    protected $table = 'usinfo';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];

    public function uinfo()
    {
    	return $this->belongsTo('App\Model\home\Users','uid','id');
    }
}
