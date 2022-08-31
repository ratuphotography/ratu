<?php

namespace Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BasedModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    //add this code in model
    public function scopeSearch($query, $keyword, $columns = [], $relationMapping = [])
    {   // if you pass empty column list then it automatically get all table column or fillable column
        if (empty($columns)) {
            // 1) get all table column 
            //  $columns = array_except( Schema::getColumnListing($this->table), $this->guarded);
            // 2) get fillable column
            $columns = $this->fillable;
        }

        $query->where(function ($query) use ($keyword, $columns, $relationMapping) {
            foreach ($columns as $key => $column) {
                $clause = $key == 0 ? 'where' : 'orWhere';
                $query->$clause($this->table . '.' . $column, "LIKE", "%{$keyword}%");

                if (!empty($relationMapping)) {
                    $this->filterByRelationship($query, $keyword, $relationMapping);
                }
            }
        });
        return $query;
    }

    private function filterByRelationship($query, $keyword, $relativeTables)
    {
        foreach ($relativeTables as $relationship => $relativeColumns) {
            $query->orWhereHas($relationship, function ($relationQuery) use ($keyword, $relativeColumns) {
                foreach ($relativeColumns as $key => $column) {
                    $clause = $key == 0 ? 'where' : 'orWhere';
                    $relationQuery->$clause($column, "LIKE", "%$keyword%");
                }
            });
        }
        return $query;
    }

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
             
        });

        static::updating(function ($model) {
             
        });

        static::deleting(function ($model) {

        });

    }

}
