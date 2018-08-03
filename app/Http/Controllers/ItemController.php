<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Item::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name'=> 'required|string',
            'description'=> 'required|string',
        ]); // Validasi Bro

        $id = Item::create($request->all())->id_item; //Proses Insert Disini
        return response()->json([
            'message' => 'Successfully Saved :D',
            'data' => Item::find($id)
        ]); // Respon ketika data tersimpan
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Item::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request , [
            'name'=> 'required|string',
            'description'=> 'required|string',
        ]); // Validasi Bro
        Item::find($id)->update($request->all()); //Proses Insert Disini
        return response()->json([
            'message' => 'Successfully Updated :D',
            'data' => Item::find($id)
        ]); // Respon ketika data terubah

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::destroy($id);
        return response()->json(['message' => 'Successfully Deleted']);
    }
}
