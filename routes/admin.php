<?php

use App\Http\Controllers\Api\V1\ApiController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

Route::group(['prefix' => 'admin', 'middleware' => ['role:super-admin']], function () {

    Route::get('api', function () {
        return view('admin.api');
    })->name('admin.api');

    Route::post('crear_token', [ApiController::class, 'crear'])
        ->name('admin.crear_token');

    Route::post('eliminar_token', [ApiController::class, 'eliminar'])
        ->name('admin.eliminar_token');

    /* ---------- ROLES ---------- */
    Route::get('roles', function () {
        $roles = Role::all();
        return view('admin.roles', compact("roles"));
    })->name('admin.roles');

    Route::get('roles/{rol}', function (Role $rol) {
        if($rol) {
            $users = User::role($rol)->get();
            return view('admin.roles_listar', compact("users", "rol"));
        }
        return redirect()->route('admin.roles');

    })->name('admin.roles.listar');

    /* ---------- TERMINO ROLES ---------- */

    /* ---------- PERMISOS ---------- */
    Route::get('permisos', function () {
        $permisos = Permission::all();
        return view('admin.permisos', compact("permisos"));
    })->name('admin.permisos');

    Route::get('permisos/{permiso}', function (Permission $permiso) {
        if($permiso) {
            $users = User::permission($permiso)->get();
            return view('admin.permisos_listar', compact("users", "permiso"));
        }
        return redirect()->route('admin.permisos');

    })->name('admin.permisos.listar');
    /* ---------- TERMINO PERMISOS ---------- */

});

Route::group(['prefix' => 'admin', 'middleware' => ['role:super-admin|admin']], function () {

    Route::get('datos', function () {
        return view('admin.datos');
    })->name('admin.datos');

    Route::get('configuracion', function () {
        return view('admin.configuracion');
    })->name('admin.configuracion');

});
