<?php

namespace App\Http\Controllers;

use App\Models\order_stok_upload;
use App\Http\Requests\Storeorder_stok_uploadRequest;
use App\Http\Requests\Updateorder_stok_uploadRequest;

class OrderStokUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeorder_stok_uploadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeorder_stok_uploadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_stok_upload  $order_stok_upload
     * @return \Illuminate\Http\Response
     */
    public function show(order_stok_upload $order_stok_upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_stok_upload  $order_stok_upload
     * @return \Illuminate\Http\Response
     */
    public function edit(order_stok_upload $order_stok_upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateorder_stok_uploadRequest  $request
     * @param  \App\Models\order_stok_upload  $order_stok_upload
     * @return \Illuminate\Http\Response
     */
    public function update(Updateorder_stok_uploadRequest $request, order_stok_upload $order_stok_upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_stok_upload  $order_stok_upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_stok_upload $order_stok_upload)
    {
        //
    }
}
