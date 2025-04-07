<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_menu')->insert([
            [
                'id' => 8,
                'parent_id' => 0,
                'order' => 8,
                'title' => 'Offices',
                'icon' => 'icon-building',
                'uri' => '/offices',
            ],
            [
                'id' => 9,
                'parent_id' => 0,
                'order' => 9,
                'title' => 'Services',
                'icon' => 'icon-list',
                'uri' => '/services',
            ],
            [
                'id' => 10,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Surveys',
                'icon' => 'icon-server',
                'uri' => '/survey',
            ],
        ]);
    }
}