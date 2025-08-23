<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['key' => 'company.name', 'value' => 'NP Plus Servicecare'],
            ['key' => 'contact.phone', 'value' => '098-552-3564'],
            ['key' => 'contact.email', 'value' => 'caregivermore@gmail.com'],
            ['key' => 'contact.line', 'value' => '@npplus'],
            ['key' => 'company.address', 'value' => 'กรุงเทพฯ ประเทศไทย'],
        ];

        foreach ($items as $item) {
            DB::table('settings')->updateOrInsert(['key' => $item['key']], ['value' => $item['value']]);
        }
    }
}
