<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneMeta extends Model {
    use HasFactory;

    protected $table = 'phones_meta';

    public function phone() {
        return $this->belongsTo( Phone::class );
    }
}
