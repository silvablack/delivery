<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foods;

class FoodsController extends Controller
{
    public function getAll() {
        return Foods::all();
    }

    public function getOne($id) {
        return Foods::find($id);
    }

    public function create(Request $request) {
        return Foods::create($request->all());
    }

    public function update(Request $request, $id){
        $food = Foods::findOrFail($id);
        $food->update($request->all());
        return $food;
    }

    public function delete(Request $request, $id) {
        $food = Foods::findOrFail($id);
        $food->delete();
        return 204;
    }
}
