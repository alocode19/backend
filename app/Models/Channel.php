<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'channel';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'channel_id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'channel_id',
        'channel_name',
        'description'
    ];

    public function announcement()
    {
        return $this->belongsTo(Announcement::class); 
    }
    
}