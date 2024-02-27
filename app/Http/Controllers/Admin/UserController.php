<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index() : View{
        // dd(User::permission('list')->get());
        $users = User::all();
        return view('screens.admin.users.index',compact('users'));
    }

    public function role(User $user) : View{
        $roles = Role::all();
        return view('screens.admin.users.assignRoles',compact('user','roles'));
    }

    public function assignedRole(Request $request,User $user) {
        // if ($role->update($request->sanitizedRoleUpdate())) {
            // if ($role) {
                $permissionsToSync = $request->input('roles', []);
                $user->syncRoles($permissionsToSync);
                // $permissionsToRevoke = $role->permissions()->pluck('name')->diff($permissionsToSync);
                // foreach ($permissionsToRevoke as $permissionToRevoke) {
                //     $role->revokePermissionTo($permissionToRevoke);
                // }
                // $role->syncPermissions($permissionsToSync);
            // }
            toastr('Role added successfully...!');
            return redirect(route('users.index'));
        // }
        // $user->assignRole();
        // return view('screens.admin.users.assignRoles',compact('user','roles'));
        return back();
    }
}
