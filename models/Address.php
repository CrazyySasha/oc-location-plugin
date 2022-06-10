<?php

namespace Crazy\Location\Models;

use Model;
use October\Rain\Database\Builder;

/**
 * Address Model
 */
class Address extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var string table associated with the model
     */
    public $table = 'crazy_location_addresses';

    /**
     * @var array guarded attributes aren't mass assignable
     */
    protected $guarded = ['*'];

    /**
     * @var array fillable attributes are mass assignable
     */
    protected $fillable = ["formatted", 'lat', 'lng'];

    /**
     * @var array rules for validation
     */
    public $rules = [
        'formatted' => 'required|min:4',
        'lat' => 'required|numeric',
        'lng' => 'required|numeric|max:100',
    ];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array jsonable attribute names that are json encoded and decoded from the database
     */
    protected $jsonable = [];

    /**
     * @var array appends attributes to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array hidden attributes removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array dates attributes that should be mutated to dates
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @var array hasOne and other relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    // public function scopeListForApi(Builder $query, $options = [])
    // {
    //     extract(array_merge([
    //         'page' => 1,
    //         'perPage' => 10,
    //     ], $options));

    //     return $query->paginate($perPage, $page);
    // }
}
