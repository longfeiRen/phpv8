<?php
namespace Phpv8\Controllers;

use Illuminate\Database\Eloquent\Model;
use Input;
use Redirect;
use View;
use Notification;
use Datatables;

abstract class AdminBaseController extends BaseBackController
{
    public function anyTablelist()
    {
        $model=$this->repository->select();
        return Datatables::of($model)->make();
    }

    /**
     * List models
     * 
     * @return void
     */
    public function index()
    {
        $model=$this->repository->getFields();
        $this->layout->content = View::make('admin.index')->with('field',$model);
    }

    /**
     * Show the form for creating a new resource.Phpv8\Modules\Users\Controllers\AdminController@store
     *
     * @return void
     */
    public function create()
    {
        $model=$this->repository->getModel();
        $this->layout->content = View::make('admin.create')
            ->withModel($model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Model $model
     * @return void
     */
    public function edit(Model $model)
    {
        $this->layout->content = View::make('admin.edit')
            ->withModel($model);
    }

    /**
     * Show resource.
     *
     * @param  Model $model
     * @return Redirect
     */
    public function show()
    {
        return Redirect::to($model->editUrl());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Model    $model
     * @return Redirect
     */
    public function store()
    {
        if ($model = $this->form->save(Input::all())) {
            $redirectUrl = Input::get('exit') ? $model->indexUrl() : $model->editUrl() ;
            return Redirect::to($redirectUrl);
        }
        return Redirect::route('admin.' . $this->repository->getTable() . '.create')
            ->withInput()
            ->withErrors($this->form->errors());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Model    $model
     * @return Redirect
     */
    public function update()
    {

        if ($this->form->update(Input::all())) {
            $redirectUrl = Input::get('exit') ? $model->indexUrl() : $model->editUrl() ;
            return Redirect::to($redirectUrl);
        }

        return Redirect::to($model->editUrl())
            ->withInput()
            ->withErrors($this->form->errors());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Model    $model
     * @return Redirect
     */
    public function destroy()
    {
        if ($this->repository->delete($model)) {
            return Redirect::back();
        }
    }
}
