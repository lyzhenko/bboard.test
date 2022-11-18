<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Good
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Good newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Good newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Good query()
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Remaining[] $remaining
 * @property-read int|null $remaining_count
 */
class Good extends Model
{
    // use HasFactory;
    protected $fillable = ['name'];

    public function remaining(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Remaining::class);
    }


}
