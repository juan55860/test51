<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Test\TestStoreRequest;

class TestController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest',['except' => 'store']);
    }
    private function getClassAndMethod($method)
    {
        return __CLASS__ .'@'. $method;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->getClassAndMethod(__FUNCTION__);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return $this->getClassAndMethod(__FUNCTION__);
        //return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TestStoreRequest $request)
    {
        return $this->getClassAndMethod(__FUNCTION__);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->getClassAndMethod(__FUNCTION__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return $this->getClassAndMethod(__FUNCTION__);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        return $this->getClassAndMethod(__FUNCTION__);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return $this->getClassAndMethod(__FUNCTION__);
    }

    public function headers(Request $request)
    {
        dd($request->headers);
    }
}
