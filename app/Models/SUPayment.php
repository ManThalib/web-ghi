<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SUPayment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Regis()
    {
        return $this->belongsTo(Regis::class);
    }
}
