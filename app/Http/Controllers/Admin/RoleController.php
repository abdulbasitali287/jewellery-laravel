<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Role\CreateRoleRequest;
use App\Http\Requests\Admin\Role\UpdateRoleRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(): View
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('screens.admin.roles.index', compact('roles', 'permissions'));
    }

    public function create(): View
    {
        $permissions = Permission::all();
        return view('screens.admin.roles.create', compact('permissions'));
    }

    public function store(CreateRoleRequest $request)
    {
        // dd(request()->permissions);
        $role = Role::create($request->sanitizedRoleCreate());
        if ($role) {
            foreach (request()->permissions as $permission) {
                $role->givePermissionTo($permission);
            }
            toastr('role added successfully...!');
            return redirect(route('role.index'));
        }
        return back();
    }

    public function edit(Role $role): View
    {
        $permissions = Permission::all();
        return view('screens.admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        if ($role->update($request->sanitizedRoleUpdate())) {
            if ($role) {
                $permissionsToSync = $request->input('permissions', []);
                $permissionsToRevoke = $role->permissions()->pluck('name')->diff($permissionsToSync);
                foreach ($permissionsToRevoke as $permissionToRevoke) {
                    $role->revokePermissionTo($permissionToRevoke);
                }
                $role->syncPermissions($permissionsToSync);
            }
            toastr('Role updated successfully...!');
            return redirect(route('role.index'));
        }

        return back();
    }

    public function destroy(Role $role)
    {
        if ($role->delete()) {
            toastr('role deleted successfully...!');
            return redirect(route('role.index'));
        }
    }

    // public function rolePermission() : View{
    //     return view('screens.admin.roles.role-permissions');
    // }
}
