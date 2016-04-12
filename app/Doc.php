<?php

namespace Sisec;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model 
{
    protected $table = "docs";

    protected $dates = ['deleted_at'];

    protected $fillable = ['typecontract', 'typeprocess','name','description','format', 'weight'];

    

    public function scopeType($query, $typeprocess)
    {
    	$query->where('typeprocess', $typeprocess);
    }
}
