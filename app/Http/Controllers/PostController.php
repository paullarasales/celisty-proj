<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rant;

class PostController extends Controller
{
    public function create(Request $request) {
        $rant = new Rant;

        $rant->fill($request->all());

        $rant->save();

        return redirect()->route('main-view')->with('status', 'added successfully');
    }

    public function destroy($id) {
        $rant = Rant::find($id);

        if($rant) {
            $rant->delete();
            return redirect()->route('main-view')->with('success', 'remove successfully');
        } else {
            return redirect()->route('main-view')->with('error', 'id not found');
        }
    }
}
