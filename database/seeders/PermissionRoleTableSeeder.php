<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'admin')->firstOrFail();

        $permissions = Permission::all();

        $role->permissions()->sync(
            $permissions->pluck('id')->all()
        );

        $role = Role::where('name', 'courses_admin')->firstOrFail();

        $permissions = Permission::whereRaw('table_name = "admin" or
                                            table_name = "people" or

                                            `key` = "browse_admin" or
                                            `key` = "browse_courses" or
                                            `key` = "read_courses" or
                                            `key` = "edit_courses" or
                                            `key` = "add_courses" or

                                            `key` = "browse_course_person" or
                                            `key` = "read_course_person" or
                                            `key` = "edit_course_person" or
                                            `key` = "add_course_person"')->get();

        $role->permissions()->sync(
            $permissions->pluck('id')->all()
        );
    }
}
