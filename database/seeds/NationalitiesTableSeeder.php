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
                'en'=> 'Afghan',
                'ar'=> 'أفغانستاني'
            ],
            [
                'en'=> 'Algerian',
                'ar'=> 'جزائري'
            ],
            [

                'en'=> 'Argentinian',
                'ar'=> 'أرجنتيني'
            ],
            [

                'en'=> 'Australian',
                'ar'=> 'أسترالي'
            ],
            [
                'en'=> 'Austrian',
                'ar'=> 'نمساوي'
            ],
            [
                'en'=> 'Bahraini',
                'ar'=> 'بحريني'
            ],
            [
                'en'=> 'Bangladeshi',
                'ar'=> 'بنغلاديشي'
            ],
            [

                'en'=> 'Belarusian',
                'ar'=> 'روسي'
            ],
            [

                'en'=> 'Belgian',
                'ar'=> 'بلجيكي'
            ],
            [
                'en'=> 'Bhutanese',
                'ar'=> 'بوتاني'
            ],
            [
                'en'=> 'Brazilian',
                'ar'=> 'برازيلي'
            ],
            [
                'en'=> 'British Indian Ocean Territory',
                'ar'=> 'إقليم المحيط الهندي البريطاني'
            ],
            [
                'en'=> 'Bulgarian',
                'ar'=> 'بلغاري'
            ],
            [
                'en'=> 'Cameroonian',
                'ar'=> 'كاميروني'
            ],
            [
                'en'=> 'Canadian',
                'ar'=> 'كندي'
            ],
            [
                'en'=> 'Cape Verdean',
                'ar'=> 'الرأس الأخضر'
            ],
            [
                'en'=> 'Chadian',
                'ar'=> 'تشادي'
            ],
            [
                'en'=> 'Chilean',
                'ar'=> 'شيلي'
            ],
            [
                'en'=> 'Colombian',
                'ar'=> 'كولومبي'
            ],
            [
                'en'=> 'Comorian',
                'ar'=> 'جزر القمر'
            ],
            [
                'en'=> 'Congolese',
                'ar'=> 'كونغي'
            ],
            [
                'en'=> 'Cypriot',
                'ar'=> 'قبرصي'
            ],
            [
                'en'=> 'Czech',
                'ar'=> 'تشيكي'
            ],
            [
                'en'=> 'Djiboutian',
                'ar'=> 'جيبوتي'
            ],
            [
                'en'=> 'Egyptian',
                'ar'=> 'مصري'
            ],
            [
                'en'=> 'Salvadoran',
                'ar'=> 'سلفادوري'
            ],
            [
                'en'=> 'Equatorial Guinean',
                'ar'=> 'غيني'
            ],
            [
                'en'=> 'Ethiopian',
                'ar'=> 'أثيوبي'
            ],
            [
                'en'=> 'Fijian',
                'ar'=> 'فيجي'
            ],
            [
                'en'=> 'French',
                'ar'=> 'فرنسي'
            ],
            [
                'en'=> 'Gambian',
                'ar'=> 'غامبي'
            ],
            [
                'en'=> 'German',
                'ar'=> 'ألماني'
            ],
            [
                'en'=> 'Ghanaian',
                'ar'=> 'غاني'
            ],
            [
                'en'=> 'Gibraltar',
                'ar'=> 'جبل طارق'
            ],
            [
                'en'=> 'Guinean',
                'ar'=> 'غيني'
            ],
            [
                'en'=> 'Hungarian',
                'ar'=> 'مجري'
            ],
            [
                'en'=> 'Icelandic',
                'ar'=> 'آيسلندي'
            ],
            [
                'en'=> 'Indian',
                'ar'=> 'هندي'
            ],
            [
                'en'=> 'Manx',
                'ar'=> 'ماني'
            ],
            [

                'en'=> 'Indonesian',
                'ar'=> 'أندونيسيي'
            ],
            [

                'en'=> 'Iranian',
                'ar'=> 'إيراني'
            ],
            [

                'en'=> 'Iraqi',
                'ar'=> 'عراقي'
            ],
            [

                'en'=> 'Irish',
                'ar'=> 'إيرلندي'
            ],
            [

                'en'=> 'Italian',
                'ar'=> 'إيطالي'
            ],
            [

                'en'=> 'Ivory Coastian',
                'ar'=> 'ساحل العاج'
            ],
            [

                'en'=> 'Jersian',
                'ar'=> 'جيرزي'
            ],
            [

                'en'=> 'Jamaican',
                'ar'=> 'جمايكي'
            ],
            [

                'en'=> 'Japanese',
                'ar'=> 'ياباني'
            ],
            [

                'en'=> 'Jordanian',
                'ar'=> 'أردني'
            ],
            [

                'en'=> 'Kazakh',
                'ar'=> 'كازاخستاني'
            ],
            [

                'en'=> 'Kenyan',
                'ar'=> 'كيني'
            ],
            [

                'en'=> 'I-Kiribati',
                'ar'=> 'كيريباتي'
            ],
            [

                'en'=> 'North Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'South Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'Kosovar',
                'ar'=> 'كوسيفي'
            ],
            [

                'en'=> 'Kuwaiti',
                'ar'=> 'كويتي'
            ],
            [

                'en'=> 'Kyrgyzstani',
                'ar'=> 'قيرغيزستاني'
            ],
            [

                'en'=> 'Laotian',
                'ar'=> 'لاوسي'
            ],
            [

                'en'=> 'Latvian',
                'ar'=> 'لاتيفي'
            ],
            [

                'en'=> 'Lebanese',
                'ar'=> 'لبناني'
            ],
            [

                'en'=> 'Basotho',
                'ar'=> 'ليوسيتي'
            ],
            [

                'en'=> 'Liberian',
                'ar'=> 'ليبيري'
            ],
            [

                'en'=> 'Libyan',
                'ar'=> 'ليبي'
            ],
            [

                'en'=> 'Liechtenstein',
                'ar'=> 'ليختنشتيني'
            ],
            [

                'en'=> 'Lithuanian',
                'ar'=> 'لتوانيي'
            ],
            [

                'en'=> 'Luxembourger',
                'ar'=> 'لوكسمبورغي'
            ],
            [

                'en'=> 'Sri Lankian',
                'ar'=> 'سريلانكي'
            ],
            [

                'en'=> 'Macanese',
                'ar'=> 'ماكاوي'
            ],
            [

                'en'=> 'Macedonian',
                'ar'=> 'مقدوني'
            ],
            [

                'en'=> 'Malagasy',
                'ar'=> 'مدغشقري'
            ],
            [

                'en'=> 'Malawian',
                'ar'=> 'مالاوي'
            ],
            [

                'en'=> 'Malaysian',
                'ar'=> 'ماليزي'
            ],
            [

                'en'=> 'Maldivian',
                'ar'=> 'مالديفي'
            ],
            [

                'en'=> 'Malian',
                'ar'=> 'مالي'
            ],
            [

                'en'=> 'Maltese',
                'ar'=> 'مالطي'
            ],
            [

                'en'=> 'Marshallese',
                'ar'=> 'مارشالي'
            ],
            [

                'en'=> 'Martiniquais',
                'ar'=> 'مارتينيكي'
            ],
            [

                'en'=> 'Mauritanian',
                'ar'=> 'موريتانيي'
            ],
            [

                'en'=> 'Mauritian',
                'ar'=> 'موريشيوسي'
            ],
            [

                'en'=> 'Mahoran',
                'ar'=> 'مايوتي'
            ],
            [

                'en'=> 'Mexican',
                'ar'=> 'مكسيكي'
            ],
            [

                'en'=> 'Micronesian',
                'ar'=> 'مايكرونيزيي'
            ],
            [

                'en'=> 'Moldovan',
                'ar'=> 'مولديفي'
            ],
            [

                'en'=> 'Monacan',
                'ar'=> 'مونيكي'
            ],
            [

                'en'=> 'Mongolian',
                'ar'=> 'منغولي'
            ],
            [

                'en'=> 'Montenegrin',
                'ar'=> 'الجبل الأسود'
            ],
            [

                'en'=> 'Montserratian',
                'ar'=> 'مونتسيراتي'
            ],
            [

                'en'=> 'Moroccan',
                'ar'=> 'مغربي'
            ],
            [

                'en'=> 'Mozambican',
                'ar'=> 'موزمبيقي'
            ],
            [

                'en'=> 'Myanmarian',
                'ar'=> 'ميانماري'
            ],
            [

                'en'=> 'Namibian',
                'ar'=> 'ناميبي'
            ],
            [

                'en'=> 'Nauruan',
                'ar'=> 'نوري'
            ],
            [

                'en'=> 'Nepalese',
                'ar'=> 'نيبالي'
            ],
            [

                'en'=> 'Dutch',
                'ar'=> 'هولندي'
            ],
            [

                'en'=> 'Dutch Antilier',
                'ar'=> 'هولندي'
            ],
            [

                'en'=> 'New Caledonian',
                'ar'=> 'كاليدوني'
            ],
            [

                'en'=> 'New Zealander',
                'ar'=> 'نيوزيلندي'
            ],
            [

                'en'=> 'Nicaraguan',
                'ar'=> 'نيكاراجوي'
            ],
            [

                'en'=> 'Nigerien',
                'ar'=> 'نيجيري'
            ],
            [

                'en'=> 'Nigerian',
                'ar'=> 'نيجيري'
            ],
            [

                'en'=> 'Niuean',
                'ar'=> 'ني'
            ],
            [

                'en'=> 'Norfolk Islander',
                'ar'=> 'نورفوليكي'
            ],
            [

                'en'=> 'Northern Marianan',
                'ar'=> 'ماريني'
            ],
            [

                'en'=> 'Norwegian',
                'ar'=> 'نرويجي'
            ],
            [

                'en'=> 'Omani',
                'ar'=> 'عماني'
            ],
            [

                'en'=> 'Pakistani',
                'ar'=> 'باكستاني'
            ],
            [

                'en'=> 'Palauan',
                'ar'=> 'بالاوي'
            ],
            [

                'en'=> 'Palestinian',
                'ar'=> 'فلسطيني'
            ],
            [

                'en'=> 'Panamanian',
                'ar'=> 'بنمي'
            ],
            [

                'en'=> 'Papua New Guinean',
                'ar'=> 'بابوي'
            ],
            [

                'en'=> 'Paraguayan',
                'ar'=> 'بارغاوي'
            ],
            [

                'en'=> 'Peruvian',
                'ar'=> 'بيري'
            ],
            [
                'en'=> 'Filipino',
                'ar'=> 'فلبيني'
            ],
            [
                'en'=> 'Portuguese',
                'ar'=> 'برتغالي'
            ],
            [
                'en'=> 'Qatari',
                'ar'=> 'قطري'
            ],
            [
                'en'=> 'Romanian',
                'ar'=> 'روماني'
            ],
            [
                'en'=> 'Russian',
                'ar'=> 'روسي'
            ],
            [
                'en'=> 'Rwandan',
                'ar'=> 'رواندا'
            ],
            [
                'en'=> 'Saudi Arabian',
                'ar'=> 'سعودي'
            ],
            [
                'en'=> 'Senegalese',
                'ar'=> 'سنغالي'
            ],
            [
                'en'=> 'Serbian',
                'ar'=> 'صربي'
            ],
            [
                'en'=> 'Singaporean',
                'ar'=> 'سنغافوري'
            ],
            [
                'en'=> 'Somali',
                'ar'=> 'صومالي'
            ],
            [
                'en'=> 'South African',
                'ar'=> 'أفريقي'
            ],
            [
                'en'=> 'Spanish',
                'ar'=> 'إسباني'
            ],
            [
                'en'=> 'Sudanese',
                'ar'=> 'سوداني'
            ],
            [
                'en'=> 'Surinamese',
                'ar'=> 'سورينامي'
            ],
            [
                'en'=> 'Swedish',
                'ar'=> 'سويدي'
            ],
            [
                'en'=> 'Swiss',
                'ar'=> 'سويسري'
            ],
            [
                'en'=> 'Syrian',
                'ar'=> 'سوري'
            ],
            [
                'en'=> 'Tanzanian',
                'ar'=> 'تنزانيي'
            ],
            [
                'en'=> 'Togolese',
                'ar'=> 'توغي'
            ],
            [
                'en'=> 'Tunisian',
                'ar'=> 'تونسي'
            ],
            [
                'en'=> 'Turkish',
                'ar'=> 'تركي'
            ],
            [
                'en'=> 'Tuvaluan',
                'ar'=> 'توفالي'
            ],
            [
                'en'=> 'Emirati',
                'ar'=> 'إماراتي'
            ],
            [
                'en'=> 'British',
                'ar'=> 'بريطاني'
            ],
            [
                'en'=> 'American',
                'ar'=> 'أمريكي'
            ],
            [
                'en'=> 'American Virgin Islander',
                'ar'=> 'أمريكي'
            ],
            [
                'en'=> 'Yemeni',
                'ar'=> 'يمني'
            ],
        ];

        foreach ($nationals as $n) {
            Nationalitie::create(['Name' => $n]);
        }

    }
}
