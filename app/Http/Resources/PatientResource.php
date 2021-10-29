<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
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
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'birthdate' => $this->birthdate,
            'zipcode' => $this->zipcode,
            'phone' => $this->phone,
            'age' => $this->age,
            'gender' => $this->gender,
            'address' => $this->address,

        ];
        
        return parent::toArray($request);
    }
}
