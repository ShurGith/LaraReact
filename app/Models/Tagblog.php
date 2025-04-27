<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tagblog extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'ico_active',
        'image',
        'icon',
        'color',
        'bg_color',
        'category_blog_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'ico_active' => 'boolean',
            'category_blog_id' => 'integer',
        ];
    }

    public function categoryBlog(): BelongsTo
    {
        return $this->belongsTo(CategoryBlog::class);
    }
}
