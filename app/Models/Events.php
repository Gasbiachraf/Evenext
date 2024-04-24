<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "organizer_id",
        "description",
        "date_start",
        "date_end",
        "location",
        "price",
        "image",
    ];




    public function users(){
        return $this->belongsToMany(User::class , "events_users");
    }
    public function tickets(){
        return $this->hasMany(Tickets::class);
    }
}
