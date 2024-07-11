<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'division' => $this->division,
            'title_first_division' => $this->first_division,
            'title_second_division' => $this->second_division,
            'title_third_division' => $this->third_division,
            'title_cup' => $this->cup,
            'title_ucl' => $this->ucl,
            'title_uel' => $this->uel,
            'title_league_cup' => $this->league_cup,
            'title_champions_cup' => $this->champions_cup,
            'title_super_cup' => $this->super_cup,
            'cdr' => $this->cdr,
            'updated_by' => $this->updated_by,
            'user_id' => $this->user_id,
            'created_at' => (new Carbon($this->created_at))->format('d-m-Y'),
        ];
    }
}
