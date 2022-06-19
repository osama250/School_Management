<?php

use App\Models\Nationalitie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitiesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('nationalities')->delete();

        $nationals = [
            [
                'en'    => 'Egyption',
                'ar'    => 'مصرى'
            ],
            [
                'en'    => 'Algerian',
                'ar'    => 'جزائري'
            ],
            [
                'en'    => 'Bahraini',
                'ar'    => 'بحريني'
            ],
            [
                'en'    => 'Djiboutian',
                'ar'    => 'جيبوتي'
            ],
            [

                'en'    => 'Iraqi',
                'ar'    => 'عراقي'
            ],
            [

                'en'    => 'Jordanian',
                'ar'    => 'أردني'
            ],
            [
                'en'    => 'Moroccan',
                'ar'    => 'مغربي'
            ],
            [
                'en'    => 'Palestinian',
                'ar'    => 'فلسطيني'
            ],
            [
                'en'    => 'Saudi Arabian',
                'ar'    => 'سعودي'
            ],
            [
                'en'    => 'Syrian',
                'ar'    => 'سوري'
            ],
            [
                'en'    => 'Emirati',
                'ar'    => 'إماراتي'
            ],
            [
                'en'    => 'Yemeni',
                'ar'    => 'يمني'
            ],
        ];

        foreach ($nationals as $n) {
            Nationalitie::create(['Name' => $n]);
        }

    }
}
