<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncementRequest;


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Announcement::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnnouncementRequest $request)
    {
    //
    // Retrieve the validated input data...
    $validated = $request->validated();

    $announcement = Announcement::create($validated);

    return  $announcement;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return Announcement::findOrFail($id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnnouncementRequest $request, string $id)
    {
        //
        $validated = $request->validated();

        $announcement = Announcement::findOrFail($id);
        $announcement ->update($validated); 

        return $announcement;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $announcement = Announcement::findOrFail($id);

        $announcement->delete();

        return $announcement;
    }
}
