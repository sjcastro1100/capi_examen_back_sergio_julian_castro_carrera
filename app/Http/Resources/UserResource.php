<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->name,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'edad' => abs(Carbon::parse($this->fecha_nacimiento)->diffInYears(Carbon::now())),
            'email' => $this->email,
            'direccion' => $this->domicile,
        ];
    }
}
