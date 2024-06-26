<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Classes\ApiResponseClass;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(UserRepositoryInterface $userRepositoryInterface): View
    {
        $data = $userRepositoryInterface->index();
        $data = ApiResponseClass::sendResponse($data,'','Users');
        return view('modules.user.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Users';
        return view('modules.user.form', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
