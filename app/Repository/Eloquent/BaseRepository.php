<?php

namespace App\Repositories\Eloquent;

use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class BaseRepository implements EloquentRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //
        // return 'test';
        return $this->model->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  array $data
     * @return \Illuminate\Http\Response
     */
    public function store(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
        return $this->model->findOrFail($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  array  $data
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(array $data, $id)
    {
        $model = $this->model->findOrFail($id);

        $model = $model->fill($data)->save();

        // After updating successfully return the updated values,
        if ($model === true) {
            $data['id'] = $id;
            return $data;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
        $model = $this->model->findOrFail($id);
        return $model->delete();
    }
}
