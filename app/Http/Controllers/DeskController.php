<?php

namespace App\Http\Controllers;

use App\Models\Desk;
use Illuminate\Http\Request;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Desk::all();
    }

    public function count() {
        return Desk::count();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        return Desk::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Desk $desk
     * @return Desk
     */
    public function show(Desk $desk): Desk
    {
        return $desk;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Desk
     */
    public function update(Request $request, Desk $desk)
    {
        $desk->update($request->all());
        return $desk;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return int
     */
    public function destroy(int $id): int
    {
        return Desk::destroy($id);
    }
}
