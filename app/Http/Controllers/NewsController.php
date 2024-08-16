<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    // Display a listing of the news posts.
    public function index()
    {
        if (auth()->check()) {
            // Fetch articles created by the logged-in user and eager load the user relationship
            $userArticles = News::where('user_id', auth()->id())->with('user')->get();
        } else {
            // If the user is not authenticated, set $userArticles to an empty collection
            $userArticles = collect();
        }

        // Fetch articles created by other users and eager load the user relationship
        $otherArticles = News::where('user_id', '!=', auth()->id())->with('user')->paginate(10);

        // Pass both collections to the view
        return view('news', compact('userArticles', 'otherArticles'));
    }


    // Show the form for creating a new news post.
    public function create()
    {
        return view('create'); // Ensure 'create.blade.php' exists in the correct location
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // Store a newly created news post in the database.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ]);

        $validatedData['user_id'] = auth()->id();

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image_file'] = $imagePath; // Use 'image_file' for consistency
        }

        // Create the news post
        $news = News::create($validatedData);

        return redirect()->route('news')->with('success', 'News created successfully.');
    }

    // Display the specified news post.
    public function show(News $news)
    {
        return view('show', compact('news')); // Adjust 'news' if your file path differs
    }

    // Show the form for editing the specified news post.
    public function edit(News $news)
    {
        return view('news.edit', compact('news')); // Adjust 'news.edit' if your file path differs
    }

    // Update the specified news post in the database.
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($news->image_file) {
                Storage::disk('public')->delete($news->image_file);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image_file'] = $imagePath; // Use 'image_file' for consistency
        }

        // Update the news post
        $news->update($validatedData);

        return redirect()->route('news')->with('success', 'News updated successfully.');
    }

    // Remove the specified news post from the database.
    public function destroy(News $news)
    {
        // Delete the image file from storage
        if ($news->image_file) { // Use 'image_file' for consistency
            Storage::disk('public')->delete($news->image_file);
        }

        // Delete the news post
        $news->delete();

        return redirect()->route('news')->with('success', 'News deleted successfully.');
    }
}
