<?php

namespace App\Models;

use App\Enums\MetricType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Metric extends Model
{
    use HasUlids;

    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'variable',
        'description',
        'type',
        'weight',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'type' => MetricType::class,
            'weight' => 'decimal:2',
        ];
    }
}
