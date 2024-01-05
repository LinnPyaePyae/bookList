<?php

namespace App\Http\Controllers;

use App\Models\content_owner;
use App\Http\Requests\Storecontent_ownerRequest;
use App\Http\Requests\Updatecontent_ownerRequest;

class ContentOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storecontent_ownerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(content_owner $content_owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(content_owner $content_owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatecontent_ownerRequest $request, content_owner $content_owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(content_owner $content_owner)
    {
        //
    }
}
