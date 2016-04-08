<?php

namespace Sisec;

use Illuminate\Database\Eloquent\Model;

class Enterprice extends Model
{
    protected $table = "enterprices";

    protected $dates = ['deleted_at'];

    protected $fillable = ['rfc', 'nameemp','legalagent','type','status','email','address', 'phone'];

    public function users()
    {
    	return $this->hasMany('Sisec\User');
    }

    public function scopeType($query, $type)
    {
    	$query->where('type', $type);
    }
}
