<?php
namespace Phpv8\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use stdClass;
use Phpv8\NestedCollection;

interface RepositoryInterface
{
    /**
     * Get empty model
     * 
     * @return Model
     */
    public function getModel();

    /**
     * Get table name
     * 
     * @return string
     */
    public function getTable();

    /**
     *field
     */
    public function getFields();
    
    /**
     * Make a new instance of the entity to query on
     *
     * @param array $with
     */
    public function make(array $with = array());

    /**
     * Find a single entity by key value
     *
     * @param string $key
     * @param string $value
     * @param array  $with
     */
    public function getFirstBy($key, $value, array $with = array(), $all = false);

    /**
     * Retrieve model by id
     * regardless of status
     *
     * @param  int       $id model ID
     * @return Model
     */
    public function byId($id, array $with = array());

    /**
     * Get all models
     *
     * @param  array       $with Eager load related models
     * @param  boolean     $all  Show published or all
     * @return Collection|NestedCollection
     */
    public function getAll(array $with = array(), $all = false);

    /**
     * Get all models and nest
     *
     * @param  boolean           $all  Show published or all
     * @param  array             $with Eager load related models
     * @return NestedCollection
     */
    public function getAllNested(array $with = array(), $all = false);

    /**
     * Get all models by key/value
     *
     * @param  string     $key
     * @param  string     $value
     * @param  array      $with
     * @param  boolean    $all
     * @return Collection
     */
    public function getAllBy($key, $value, array $with = array(), $all = false);

    /**
     * Get all models by key/value and nest collection
     *
     * @param  string     $key
     * @param  string     $value
     * @param  array      $with
     * @param  boolean    $all
     * @return Collection
     */
    public function getAllByNested($key, $value, array $with = array(), $all = false);

    /**
     * Get latest models
     *
     * @param  integer      $number number of items to take
     * @param  array        $with array of related items
     * @return Collection
     */
    public function latest($number = 10, array $with = array());

    /**
     * Get single model by Slug
     *
     * @param  string $slug slug
     * @param  array  $with related tables
     * @return mixed
     */
    public function bySlug($slug, array $with = array());

    /**
     * Return all results that have a required relationship
     *
     * @param  string $relation
     * @param  array  $with
     * @return Collection
     */
    public function has($relation, array $with = array());

    /**
     * Create a new model
     *
     * @param  array  Data needed for model creation
     * @return mixed Model or false on error during save
     */
    public function create(array $data);

    /**
     * Update an existing model
     *
     * @param  array  Data needed for model update
     * @return boolean
     */
    public function update(array $data);

    /**
     * Sort models
     *
     * @param  array  Data to update Pages
     * @return boolean
     */
    public function sort(array $data);


    /**
     * Delete model
     *
     * @return boolean
     */
    public function delete($model);

}
