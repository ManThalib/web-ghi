<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Upload;

class SUUpload extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Upload()
    {
        return $this->belongsTo(Upload::class);
    }
}
