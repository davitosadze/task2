<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "videos";
    protected $fillable = ["video_link", "description", "video_title", "channel_name"];
    use HasFactory;
}
