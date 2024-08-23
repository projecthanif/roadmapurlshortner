<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Http\Resources\V1\LinkCollection;
use App\Http\Resources\V1\LinkResource;
use App\Models\Link;
use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new LinkCollection(Link::all());
    }


    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        return new LinkResource($link);
    }

    public function short(string $shortCode)
    {
        $res = Link::where([
            'shortCode' => $shortCode
        ])->get()->first();

        unset($res['accessCount']);

        return new JsonResource($res);
    }

    public function stats(string $shortCode)
    {
        $res = Link::where([
            'shortCode' => $shortCode
        ])->get()->first();

        return new JsonResource($res);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        $apiData = $request->validated();
        $code = Str::random(7);
        $apiData['shortCode'] = $code;

        $link = Link::create($apiData);
        return new LinkResource($link);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $res = $link->delete();

        return $res;
    }
}
