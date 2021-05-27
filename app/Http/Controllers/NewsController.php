<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            return response()->json(NewsResource::collection(News::where('title', 'like', "%$request->search%")->get()));

        }
        return response()->json(NewsResource::collection(News::all()));
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
     * @return JsonResponse
     */
    public function show(News $news): JsonResponse
    {
        return response()->json(new NewsResource($news));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsUpdateRequest $request
     * @param News $news
     * @return JsonResponse
     */
    public function update(NewsUpdateRequest $request, News $news): JsonResponse
    {
        $news->update($request->validated());

        return response()->json($news, 201);
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
