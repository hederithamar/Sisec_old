<?php
namespace Sisec;
use Illuminate\Database\Eloquent\Model;
class State extends Model
{
    protected $table = "states";
    protected $dates = ['deleted_at'];
    protected $fillable = ['namestate'];
}