<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Job
 *
 * @property int $id
 * @property int $car_services_id
 * @property int $status_id
 * @property int $mechanic_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CarService $car_service
 * @property-read \App\Models\User $mechanic
 * @property-read \App\Models\Status $status
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCarServicesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereMechanicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_services_id',
        'status_id',
        'mechanic_id',
    ];

    public function mechanic(){
        return $this->belongsTo(User::class, 'mechanic_id');
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function car_service(){
        return $this->belongsTo(CarService::class, 'car_services_id');
    }
}
