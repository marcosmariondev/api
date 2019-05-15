<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{

    use SoftDeletes;

    protected $fillable = ['name'];

    public function tools()
    {
        return $this->belongsToMany(Tool::class);
    }

    public function setTagssAttribute($value)
    {
        dd($this->tools);
        $this->attributes['first_name'] = strtolower($value);
    }

    public function returnAllTags()
    {

    }
}
