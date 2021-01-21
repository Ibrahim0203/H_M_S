<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    
    
    private $roleSuperAdmin;
    private $roleAdmin;
    private $roleStudent;
    private $roleVisitor;
    public function __construct(){
        $this->roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $this->roleAdmin = Role::create(['name' => 'admin']);
         $this->roleStudent = Role::create(['name' => 'student']);
        $this->roleVisitor = Role::create(['name' => 'visitor']);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'blog.create',
            'blog.edit',
            'blog.delete',
            'blog.view',

            'notice.create',
            'notice.edit',
            'notice.delete',
            'notice.view',

            'askroom.edit',
            'askroom.delete',
            'askroom.view',
        ];
        

        for ($i=0; $i < count($permissions); $i++) { 
            # code...
            $permission = Permission::create(['name' => $permissions[$i]]);
            $this->roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($this->roleSuperAdmin);
        }

    }
}
