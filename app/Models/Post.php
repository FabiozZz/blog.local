<?php

namespace App\Models;

use Illuminate\Database\Concerns\BuildsQueries;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory, BuildsQueries;

    /**
     * @var string
     */
    protected $table = 'posts';
    protected $fillable = [
        'author_id',
        'title',
        'except',
        'image',
        'thumb',
        'body',
    ];
    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class,'author_id');
    }
}
