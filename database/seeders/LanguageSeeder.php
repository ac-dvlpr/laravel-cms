<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Common\Entities\Language;
use Illuminate\Database\Eloquent\Model;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $languages = [
            [
                'language_name' => 'Polish',
                'language_code' => 'pl'
            ],
            [
                'language_name' => 'English',
                'language_code' => 'en'
            ]
            ];

        foreach ($languages as $item) {
            $language = Language::firstOrNew($item);
            $language->save();
        }
    }
}
