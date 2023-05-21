<?php

namespace App\Http\Controllers;

use App\Models\Padlet;
use App\Models\UserPadlet;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class PadletController extends Controller
{
    //get all padlets
    public function index() : JsonResponse {
        $padlets = Padlet::with(['creator', 'users', 'entries'])->get();
        return response()->json($padlets, 200);
    }

    //creates new padlet
    public function save(Request $request) : JsonResponse {
        DB::beginTransaction();

        try {
            $padlet = Padlet::create($request->all());
            $users = $request['users'];

            if (isset($users) && is_array($users)){
                foreach ($users as $user){
                    UserPadlet::create(['padlet_id' => $padlet->id, 'user_id' => $user['id'], 'role_id' => $user['role']]);
                }
            }

            DB::commit();
            return response()->json($padlet, 201);
        }

        catch(\Exception $e){
                DB::rollBack();
                return response()->json("saving padlet failed: ". $e->getMessage(), 420);
            }
    }

    //upadtes existing padlet with certain id
    public function update(Request $request, string $id) : JsonResponse{
        $padlet = Padlet::with(['entries', 'creator', 'users'])
            ->where('id', $id)->first();

        $padlet->update($request->all());

        return response()->json($padlet, 201);

    }

    //get padlet with certain id
    public function findById(string $id) : JsonResponse{
        $padlet = Padlet::where('id', $id)->with(['creator', 'entries'])->first();
        return $padlet != null ? response()->json($padlet, 200) : response()->json(null, 200);
    }

    //delets padlet with certain id
    public function delete(string $id) : JsonResponse {
        $padlet = Padlet::where('id', $id)->first();
        if ($padlet != null) {
            $padlet->delete();
            return response()->json('padlet (' . $id . ') successfully deleted', 200);
        }
        else
            return response()->json('padlet could not be deleted - it does not exist',422);
    }
}


