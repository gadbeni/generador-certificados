<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-19 21:42:08',
                'icon_class' => 'voyager-boat',
                'id' => 1,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.dashboard',
                'target' => '_self',
                'title' => 'Dashboard',
                'updated_at' => '2023-10-19 21:42:08',
                'url' => '',
            ),
            1 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-19 21:42:08',
                'icon_class' => 'voyager-images',
                'id' => 2,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.media.index',
                'target' => '_self',
                'title' => 'Media',
                'updated_at' => '2023-10-20 14:10:03',
                'url' => '',
            ),
            2 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-10-19 21:42:08',
                'icon_class' => 'voyager-person',
                'id' => 3,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => 'null',
                'parent_id' => 14,
                'route' => 'voyager.users.index',
                'target' => '_self',
                'title' => 'Usuarios',
                'updated_at' => '2023-10-20 13:28:22',
                'url' => '',
            ),
            3 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-19 21:42:08',
                'icon_class' => 'voyager-lock',
                'id' => 4,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 14,
                'route' => 'voyager.roles.index',
                'target' => '_self',
                'title' => 'Roles',
                'updated_at' => '2023-10-20 13:28:22',
                'url' => '',
            ),
            4 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-10-19 21:42:08',
                'icon_class' => 'voyager-tools',
                'id' => 5,
                'menu_id' => 1,
                'order' => 6,
                'parameters' => '',
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Herramientas',
                'updated_at' => '2023-10-20 13:55:26',
                'url' => '',
            ),
            5 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-19 21:42:08',
                'icon_class' => 'voyager-list',
                'id' => 6,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.menus.index',
                'target' => '_self',
                'title' => 'Menu Builder',
                'updated_at' => '2023-10-20 13:21:23',
                'url' => '',
            ),
            6 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-19 21:42:08',
                'icon_class' => 'voyager-data',
                'id' => 7,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.database.index',
                'target' => '_self',
                'title' => 'Database',
                'updated_at' => '2023-10-20 13:21:23',
                'url' => '',
            ),
            7 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-19 21:42:08',
                'icon_class' => 'voyager-compass',
                'id' => 8,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.compass.index',
                'target' => '_self',
                'title' => 'Compass',
                'updated_at' => '2023-10-20 13:21:23',
                'url' => '',
            ),
            8 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-19 21:42:08',
                'icon_class' => 'voyager-bread',
                'id' => 9,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.bread.index',
                'target' => '_self',
                'title' => 'BREAD',
                'updated_at' => '2023-10-20 13:21:23',
                'url' => '',
            ),
            9 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-10-19 21:42:08',
                'icon_class' => 'voyager-settings',
                'id' => 10,
                'menu_id' => 1,
                'order' => 7,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.settings.index',
                'target' => '_self',
                'title' => 'Configuraciones',
                'updated_at' => '2023-10-20 13:55:26',
                'url' => '',
            ),
            10 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-20 13:07:05',
                'icon_class' => 'voyager-people',
                'id' => 12,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.people.index',
                'target' => '_self',
                'title' => 'Personas',
                'updated_at' => '2023-10-20 13:55:36',
                'url' => '',
            ),
            11 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-10-20 13:28:07',
                'icon_class' => 'voyager-lock',
                'id' => 14,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Seguridad',
                'updated_at' => '2023-10-20 14:10:03',
                'url' => '',
            ),
            12 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-10-20 13:49:40',
                'icon_class' => 'voyager-study',
                'id' => 15,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.courses.index',
                'target' => '_self',
                'title' => 'Cursos',
                'updated_at' => '2023-10-20 13:55:34',
                'url' => '',
            ),
        ));
        
        
    }
}