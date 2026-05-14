<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Candidate extends Model
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
        'bps_code',
        'kemendagri_code',
        'jss_users',
        'kemantren',
        'population_density',
        'self_funding',
        'wifi_count',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'jss_users' => 'integer',
            'wifi_count' => 'integer',
            'self_funding' => 'integer',
            'population_density' => 'integer',
        ];
    }
}
