<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\InvoiceStatus;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $client = $this->client !== null ? [
            'id' => $this->client->id,
            'name' => $this->client->name,
        ] : null;


        return [
            'id' => $this->id,
            'status' => [
                'code' => $this->status,
                'value' => InvoiceStatus::listStatusValue()[$this->status]
            ],
            'total' => $this->total,
            'client' => $client,
            'products' => $this->products,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
