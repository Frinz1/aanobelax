<?php
namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::all();
        return response()->json($bookmarks);
    }

    public function store(Request $request)
    {
        $bookmark = Bookmark::create($request->all());
        return response()->json($bookmark, 201);
    }

    public function show($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        return response()->json($bookmark);
    }

    public function update(Request $request, $id)
    {
        $bookmark = Bookmark::findOrFail($id);
        $bookmark->update($request->all());
        return response()->json($bookmark, 200);
    }

    public function destroy($id)
    {
        Bookmark::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}