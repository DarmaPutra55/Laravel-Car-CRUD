<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Status
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarService[] $car_service
 * @property-read int|null $car_service_count
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @mixin \Eloquent
 */
class Status extends Model
{
    use HasFactory;

    public function car_service(){
        return $this->hasMany(CarService::class);
    }
}
