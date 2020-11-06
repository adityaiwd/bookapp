<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AuthorController extends BaseController
{
    //
    public function index()
    {
        return Author::all();
    }

    public function withId($id)
    {
        if (Author::where('id', '=', $id)->exists()) {
            return Author::find($id);
        } else {
            return response()->json(['message' => 'author not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'biography' => 'required'
        ]);

        $author = Author::create(
            $request->only(['name', 'gender', 'biography'])
        );

        return response()->json([
            'created' => true,
            'data' => $author
        ], 201);
    }

    public function update(Request $request, $id)
    {
        try {
            $Author = Author::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'author not found'
            ], 404);
        }

        $Author->fill(

            $request->only(['name', 'gender', 'biography'])
        );
        $Author->save();

        return response()->json([
            'updated' => true,
            'data' => $Author
        ], 200);
    }

    public function destroy($id)
    {
        try {
            $Author = Author::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Author not found'
                ]
            ], 404);
        }

        $Author->delete();

        return response()->json([
            'deleted' => true
        ], 200);
    }
}
