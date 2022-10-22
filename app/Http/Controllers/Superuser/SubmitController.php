<?php

namespace App\Http\Controllers\Superuser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\SUUpload;

class SubmitController extends Controller
{
    public function show()
    {
        $uploadAll = DB::table("regis")
            ->join("uploads", function ($join) {
                $join->on("regis.id", "=", "uploads.regis_id");
            })
            ->join("s_u_uploads", function ($join) {
                $join->on("uploads.id", "=", "s_u_uploads.uploads_id");
            })
            ->join("users", function ($join) {
                $join->on("regis.user_id", "=", "users.id");
            })
            ->get();

        // dd($uploadAll);
        return view('superuser.submit.index', [
            'uploadAll' => $uploadAll,
        ]);
    }

    public function download($id)
    {
        return Storage::download($id);
    }
}
