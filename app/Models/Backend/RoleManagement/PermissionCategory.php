<?php

namespace App\Models\Backend\RoleManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermissionCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'slug', 'note', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'permission_categories';

    protected static $permissionCategory;

    public static function createOrUpdatePermissionCategory ($request, $id = null)
    {
        PermissionCategory::updateOrCreate(['id' => $id], [
            'name'  => $request->name,
            'slug'  => str_replace(' ', '-', $request->name),
            'note'  => $request->note,
            'status'    => $request->status == 'on' ? 1 : 0
        ]);
    }

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::deleting(function ($category) {
            if (!empty($category->permissions))
            {
                $category->permissions->each->delete();
            }
        });
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
