<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2016_01_01_000000_add_voyager_user_fields',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2016_01_01_000000_create_data_types_table',
                'batch' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2016_05_19_173453_create_menu_table',
                'batch' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2016_10_21_190000_create_roles_table',
                'batch' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2016_10_21_190000_create_settings_table',
                'batch' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2016_11_30_135954_create_permission_table',
                'batch' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2016_11_30_141208_create_permission_role_table',
                'batch' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2016_12_26_201236_data_types__add__server_side',
                'batch' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
                'batch' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2017_01_14_005015_create_translations_table',
                'batch' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
                'batch' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
                'batch' => 2,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
                'batch' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
                'batch' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2017_08_05_000000_add_group_to_settings_table',
                'batch' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2017_11_26_013050_add_user_role_relationship',
                'batch' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2017_11_26_015000_create_user_roles_table',
                'batch' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2018_03_11_000000_add_user_settings',
                'batch' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2018_03_14_000000_add_details_to_data_types_table',
                'batch' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2018_03_16_000000_make_settings_value_nullable',
                'batch' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2016_01_01_000000_create_pages_table',
                'batch' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2016_01_01_000000_create_posts_table',
                'batch' => 3,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2016_02_15_204651_create_categories_table',
                'batch' => 3,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2017_04_11_000000_alter_post_nullable_fields_table',
                'batch' => 3,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2019_05_03_000001_create_customer_columns',
                'batch' => 4,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2019_05_03_000002_create_subscriptions_table',
                'batch' => 4,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2020_03_01_153202_create_orders_table',
                'batch' => 5,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2020_03_01_162017_create_orders_tables_table',
                'batch' => 6,
            ),
            31 => 
            array (
                'id' => 34,
                'migration' => '2020_03_01_162117_create_tab_orders_table',
                'batch' => 7,
            ),
        ));
        
        
    }
}