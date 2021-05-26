<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return NewsResource::collection(News::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsStoreRequest $request
     * @return JsonResponse
     */
    public function store(NewsStoreRequest $request): JsonResponse
    {
        $news = News::create($request->validated());
        return response()->json($news, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return NewsResource
     */
    public function show(News $news): NewsResource
    {
        return new NewsResource($news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsUpdateRequest $request
     * @param News $news
     * @return News
     */
    public function update(NewsUpdateRequest $request, News $news): News
    {
        $news->update($request->validated());

        return $news;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return void
     */
    public function destroy(News $news)
    {
        //
    }
}
