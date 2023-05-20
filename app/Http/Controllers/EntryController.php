<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntryController extends Controller
{
    //get all entries
    public function index() : JsonResponse {
        $padlets = Entry::with(['creator'])->get();
        return response()->json($padlets, 200);
    }

    //creates new entry
    public function save(Request $request) : JsonResponse {
        $entry = Entry::create($request->all());
        return response()->json($entry, 200);
    }

    //get entry with certain id
    public function findById(string $id) : JsonResponse{
        $padlet = Entry::where('id', $id)->with(['creator'])->first();
        return $padlet != null ? response()->json($padlet, 200) : response()->json(null, 200);
    }

    //get Entry with certain id with padlet
    public function getEntriesOfPadlet(string $id) : JsonResponse {
        $entries = Entry::where('id', $id)->with(['padlet'])->first();
        return $entries != null ? response()->json($entries, 200) : response()->json(null, 200);
    }

    //delets entry with certain id
    public function delete(string $id) : JsonResponse {
        $padlet = Entry::where('id', $id)->first();
        if ($padlet != null) {
            $padlet->delete();
            return response()->json('entry (' . $id . ') successfully deleted', 200);
        }
        else
            return response()->json('entry could not be deleted - it does not exist',422);
    }
}
