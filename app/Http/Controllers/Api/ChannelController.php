<?php

namespace App\Http\Controllers\Api;

use App\Models\Channel;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChannelRequest;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Channel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChannelRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        $channel = Channel::create($validated);

        return  $channel;  
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return Channel::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChannelRequest $request, string $id)
    {

         $validated = $request->validated();

        $channel = Channel::findOrFail($id);
        $channel ->update($validated); 

        return $channel;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
            $channel = Channel::findOrFail($id);

            $channel->delete();

            return $channel;
    }
}