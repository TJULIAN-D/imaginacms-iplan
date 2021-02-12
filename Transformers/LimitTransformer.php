<?php

namespace Modules\Iplan\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LimitTransformer extends JsonResource
{
  public function toArray($request)
  {
    return [
      'id' => $this->when($this->id,$this->id),
      'entity' => $this->when($this->entity,$this->entity),
      'quantity' => $this->when($this->quantity,$this->quantity),
      'attribute' => $this->when($this->attribute,$this->attribute),
      'attributeValue' => $this->when($this->attribute_value,$this->attribute_value),
      'planId' => $this->when($this->plan_id,$this->plan_id),
      'plan' => new PlanTransformer($this->whenLoaded('plan')),
      'createdAt' => $this->when($this->created_at, $this->created_at),
      'updatedAt' => $this->when($this->updated_at, $this->updated_at),
    ];
  }
}
