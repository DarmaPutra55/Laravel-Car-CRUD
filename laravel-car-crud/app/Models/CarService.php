<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CarService
 *
 * @property int $id
 * @property int $car_id
 * @property int $service_id
 * @property int $status_id
 * @property string $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Car $car
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Job[] $job
 * @property-read int|null $job_count
 * @property-read \App\Models\Service $service
 * @property-read \App\Models\Status $status
 * @method static \Illuminate\Database\Eloquent\Builder|CarService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarService query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarService whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarService whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarService whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarService whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarService whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CarService extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'status_id',
        'service_id',
        'note',
    ];

    public function job(){
        return $this->hasMany(Job::class, 'car_services_id');
    }

    public function car() {
        return $this->belongsTo(Car::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
