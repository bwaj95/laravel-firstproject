<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $id = 7;

        // $posts = DB::table('posts')
        //     ->where("id", $id)
        //     ->get();

        // $postsWithOnlyBodyColumns = DB::table('posts')
        //     ->select("body")
        //     ->get();

        // $postsWhereOrWhere = DB::table('posts')
        //     ->where("created_at", "<", now()->subDay())
        //     ->orWhere("title", "Prof.")
        //     ->get();

        // $postsWhereBetween = DB::table('posts')
        //     ->whereBetween("id", [1, 5])
        //     ->get();

        // $insert = DB::table('posts')
        //     ->insert([
        //         "title" => "Mr.",
        //         "body" => "new body.",
        //     ]);

        // $update = DB::table('posts')
        //     ->where("id", "=", 8)
        //     ->update([
        //         "created_at" => now(),
        //         "updated_at" => now(),
        //     ]);

        $delete = DB::table('posts')
            ->where("id", "=", 8)
            ->delete();

        dd($delete);

    }
}
