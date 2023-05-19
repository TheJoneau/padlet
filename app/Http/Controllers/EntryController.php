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

    public function getEntriesOfPadlet() : JsonResponse {
        $padlets = Entry::with(['creator'])->get();
        //where padlet id
        //get roles einfach mit get
        return response()->json($padlets, 200);
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
