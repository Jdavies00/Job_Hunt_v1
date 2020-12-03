<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommJobsBoard extends Model
{
    use HasFactory;
    protected $table = 'CommunityJobsBoard';
    protected $primarayKey = 'id';
    public $incrementing = true;    
    public $timestamps = true;
    
}
