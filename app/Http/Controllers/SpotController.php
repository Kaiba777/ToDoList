<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function index() {
        return view('tasks.day');
    }

    public function AllSpot() {
        return view('tasks.allspot', [
            'spots' => Spot::orderBy('created_at', 'asc')->paginate(10)
        ]);
    }
}
