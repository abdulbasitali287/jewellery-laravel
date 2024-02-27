<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Permission\CreatePermissionRequest;
use App\Http\Requests\Admin\Permission\UpdatePermissionRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index() : View {
        $permissions = Permission::all();
        return view('screens.admin.permissions.index',compact('permissions'));
    }

    public function create() : View {
        return view('screens.admin.permissions.create');
    }

    public function store(CreatePermissionRequest $request){
        if(Permission::create($request->sanitizedPermission())){
            toastr('permission added successfully...!');
            return redirect(route('permission.index'));
        }
        return back();
    }

    public function edit(Permission $permission) : View{
        return view('screens.admin.permissions.edit',compact('permission'));
    }

    public function update(UpdatePermissionRequest $request,Permission $permission) {
        if($permission->update($request->sanitizedUpdatePermission())){
            toastr('permission updated successfully...!');
            return redirect(route('permission.index'));
        }
        return back();
    }

    public function destroy(Permission $permission) {
        if($permission->delete()){
            toastr('permission deleted successfully...!');
            return redirect(route('permission.index'));
        }
    }
}
