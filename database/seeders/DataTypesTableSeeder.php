<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2023-10-19 21:42:08',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Usuarios',
                'display_name_singular' => 'Usuario',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2023-10-20 14:16:02',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2023-10-19 21:42:08',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2023-10-19 21:42:08',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2023-10-19 21:42:08',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2023-10-20 14:18:26',
            ),
            3 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-10-20 13:07:05',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Personas',
                'display_name_singular' => 'Persona',
                'generate_permissions' => 1,
                'icon' => 'voyager-people',
                'id' => 9,
                'model_name' => 'App\\Models\\Person',
                'name' => 'people',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'people',
                'updated_at' => '2023-10-20 14:13:06',
            ),
            4 => 
            array (
                'controller' => '\\App\\Http\\Controllers\\Voyager\\CourseController',
                'created_at' => '2023-10-20 13:49:40',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Cursos',
                'display_name_singular' => 'Curso',
                'generate_permissions' => 1,
                'icon' => 'voyager-study',
                'id' => 10,
                'model_name' => 'App\\Models\\Course',
                'name' => 'courses',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'courses',
                'updated_at' => '2023-10-20 20:30:49',
            ),
        ));
        
        
    }
}