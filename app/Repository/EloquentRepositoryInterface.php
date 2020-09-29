<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */

 Interface EloquentRepositoryInterface
 {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index();


    /**
     * Store a newly created resource in storage.
     *
     * @param  array $data
     * @return \Illuminate\Http\Response
     */
    public function store(array $data);


    /**
     * Display the specified resource.
     *
     * @param  string   $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id);


    /**
     * Update the specified resource in storage.
     *
     * @param  array  $data
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(array $data, $id);

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id);
 }
