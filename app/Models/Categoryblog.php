<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoryblog extends Model
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
        ];
    }

    public function blogs(): BelongsToMany
    {
        return $this->belongsToMany(Blog::class);
    }

    public function tagblogs(): HasMany
    {
        return $this->hasMany(Tagblog::class);
    }
}
