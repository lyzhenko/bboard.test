<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Remaining
 *
 * @property int $id
 * @property int $count
 * @property int $good_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Good|null $Goods
 * @method static \Illuminate\Database\Eloquent\Builder|Remaining newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remaining newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remaining query()
 * @method static \Illuminate\Database\Eloquent\Builder|Remaining whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remaining whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remaining whereGoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remaining whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remaining whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Good $good
 */
class Remaining extends Model
{
    // use HasFactory;

    protected $fillable = ['good_id', 'count'];

    public function good(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Good::class);
    }
}
