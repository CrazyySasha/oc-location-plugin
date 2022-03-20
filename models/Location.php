<?php namespace Crazy\Location\Models;

use Model;

/**
 * Location Model
 *
 * @property int $id
 * @property string $name
 * @property int|null $parent_id
 * @property int|null $nest_left
 * @property int|null $nest_right
 * @property int|null $nest_depth
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \October\Rain\Database\TreeCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Location allChildren($includeSelf = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Location forChildrens()
 * @method static \October\Rain\Database\TreeCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Location getAllRoot()
 * @method static \Illuminate\Database\Eloquent\Builder|Location getNested()
 * @method static \Illuminate\Database\Eloquent\Builder|Location leaves()
 * @method static \Illuminate\Database\Eloquent\Builder|Location listsNested($column, $key = null, $indent = '&nbsp;&nbsp;&nbsp;')
 * @method static \October\Rain\Database\Builder|Location newModelQuery()
 * @method static \October\Rain\Database\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location parents($includeSelf = false)
 * @method static \October\Rain\Database\Builder|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|Location siblings($includeSelf = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereNestDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereNestLeft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereNestRight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location withoutNode($node)
 * @method static \Illuminate\Database\Eloquent\Builder|Location withoutRoot()
 * @method static \Illuminate\Database\Eloquent\Builder|Location withoutSelf()
 * @mixin \Eloquent
 */
class Location extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;
    use \October\Rain\Database\Traits\SoftDelete;


    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name'];
    /**
     * @var string table associated with the model
     */
    public $table = 'crazy_location_locations';

    /**
     * @var array guarded attributes aren't mass assignable
     */
    protected $guarded = ['name'];

    /**
     * @var array fillable attributes are mass assignable
     */
    protected $fillable = [];

    /**
     * @var array rules for validation
     */
    public $rules = [];

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
        'updated_at'
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
}
