<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'questionId',
        'answer',
        'isCorrect',
    ];

    public function questionId(): BelongsTo
    {
        return $this->belongsTo(question::class, 'questionId');
    }

    protected function casts(): array
    {
        return [
            'isCorrect' => 'boolean',
        ];
    }

    public function scopeCorrect($query)
    {
        return $query->where('isCorrect', true);
    }
}
