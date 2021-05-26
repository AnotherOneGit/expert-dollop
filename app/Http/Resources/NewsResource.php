<?php

namespace App\Http\Resources;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

/**
 * Class NewsResource
 * @package App\Http\Resources
 * @mixin News
 */

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'title' => $this->title,
            'updated_at' => $this->updated_at,
            'status' => $this->when(Auth::user()->isAdmin(), $this->status),
            'body' => $this->when(\request()->route()->getName() == 'news.show', $this->body),
        ];
    }
}
