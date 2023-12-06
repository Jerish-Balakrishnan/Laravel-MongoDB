<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class MongoController extends Controller
{
    public function read_data() {
        $resumes = Resume::get();
        
        $response = [
            'success' => true,
            'data'    => $resumes,
            'message' => 'Data fetched successfully.'
        ];

        return response()->json($response, 200);
    }

    public function write_data() {
        // 
    }
}
