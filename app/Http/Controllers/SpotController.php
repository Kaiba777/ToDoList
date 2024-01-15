<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SpotController extends Controller
{
    // Pour la vue day
    public function index() {
        return view('tasks.day');
    }

    // Pour la vue allspot
    public function AllSpot() {
        return view('tasks.allspot', [
            'spots' => Spot::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function Store(Request $request) {
        $url = Route::getCurrentRoute()->uri();
        $post = Spot::create([
            'title' =>  $request->input('edit'),
            'confirmed' => false
        ]);
        if ($url == 'all') {
            return redirect()->route($url);
        }elseif ($url == 'planifier') {
            return redirect()->route($url);
        }   
    }

    public function planifier(Request $request){
        return view('tasks.planifie', [
            'spots' => Spot::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function destroy(Spot $spot){
        $spot->delete();
        return to_route('planifier');
    }

    public function important (){
        return view('tasks.important');
    }
}
