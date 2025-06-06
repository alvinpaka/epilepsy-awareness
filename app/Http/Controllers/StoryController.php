<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use Carbon\Carbon;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::latest()->get();
        return view('epilepsy-awareness', compact('stories'));
    }

    public function create()
    {
        return view('share-story');
    }

    public function store(Request $request)
    {
        // Debugging: Log the request data
        \Log::info($request->all());

        // Validate and save the story
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'country_code' => 'required|string|max:5',
            'subject' => 'required|string|max:255',
            'story' => 'required|string',
        ]);

        // Create a new story instance and save it
        Story::create($validated);

        return redirect()->back()->with('success', 'Your story has been submitted successfully!');
    }
}
