<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content_Owner extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    public function books()
    {
        return $this->hasMany(Tbl_Book::class, 'co_id', 'id');
    }
}
