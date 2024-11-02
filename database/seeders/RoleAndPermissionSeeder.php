<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        // Membuat role
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Membuat permission
        $editArticles = Permission::create(['name' => 'edit articles']);
        $deleteArticles = Permission::create(['name' => 'delete articles']);

        // Memberikan permission ke role
        $adminRole->givePermissionTo($editArticles);
        $adminRole->givePermissionTo($deleteArticles);

        // Menambahkan role ke user
        $user = User::find(1); // Ganti dengan ID pengguna yang sesuai
        $user->assignRole('admin');
    }
}
