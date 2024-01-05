<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_Book extends Model
{
    use HasFactory;

    public function contentOwner()
    {
        return $this->belongsTo(Content_Owner::class, 'co_id', 'id');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }
}
