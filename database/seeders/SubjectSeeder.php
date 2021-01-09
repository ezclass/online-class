<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        $subjects = [

            //grade 5
            ['name' => ['si' => 'සිංහල', 'en' => 'Sinhala']],
            ['name' => ['si' => 'ගණිතය',  'en' => 'Maths']],
            ['name' => ['si' =>'පරිසරය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'බුද්ධදර්මය',  'en' => 'Buddhism']],
            ['name' => ['si' =>'ඉංග්‍රීසි',  'en' => 'English']],

            //grade 6-9 common
            ['name' => ['si' =>'බුද්ධාගම',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ක්‍රිස්තියානි ආගම',  'en' => 'Sinhala']],
            ['name' => ['si' =>'කතෝලික ආගම',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ඉස්ලාම්',  'en' => 'Sinhala']],
            ['name' => ['si' =>'සිංහල භාෂාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'සිංහල භාෂාව හා සාහිත්‍ය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ඉංග්‍රීසි භාෂාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'විද්‍යාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ඉතිහාසය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'භූගෝල විද්‍යාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ජීවන නිපුණතා හා පුරවැසි අධ්‍යාපනය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'පුරවැසි අධ්‍යාපනය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'නර්තනය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'පෙරදිග සංගීතය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'අපරදිග සංගීතය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'බටහිර සංගීතය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'චිත්‍ර කලාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'නාට්‍ය හා රංග කලාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ප්‍රායෝගික හා තාක්ෂණ කුසලතා',  'en' => 'Sinhala']],
            ['name' => ['si' =>'සෞඛ්‍ය හා ශාරීරික අධ්‍යාපනය',  'en' => 'Sinhala']],

            // grade 10-11 special
            ['name' => ['si' =>'නිර්මාණකරනය හා යාන්ත්‍රික තාක්ෂණවේදය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ගෘහ ආර්ථික විද්‍යාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'කෘෂි හා ආහාර තාක්ෂණවේදය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ජලජ ජීව සම්පත් තාක්ෂණය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'නිර්මාණකරනය හා ඉදිකිරීම් තාක්ෂණවේදය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ශිල්ප කලා',  'en' => 'Sinhala']],

            // grade 12-13 special
            ['name' => ['si' =>'භෞතික විද්‍යාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'රසායන විද්‍යාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'කෘෂි විද්‍යාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ජීව විද්‍යාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'සංයුක්ත ගණිතය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ආර්ථික විද්‍යාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'තර්කනය සහ විද්‍යාත්මක ක්‍රමය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'දේශපාලන විද්‍යාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ව්‍යාපාර සංඛ්‍යානය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ව්‍යාපාර අධ්‍යනය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ගිණුම්කරණය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'චිත්‍ර',  'en' => 'Sinhala']],
            ['name' => ['si' =>'තොරතුරු හා සන්නිවේදන තාක්ෂණය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'තාක්ෂනය සදහා විද්‍යාව',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ඉංජිනේරු තාක්ෂනය',  'en' => 'Sinhala']],
            ['name' => ['si' =>'ජෛව පද්ධති තාක්ෂනය',  'en' => 'Sinhala']],

            ];
            collect($subjects)
            ->each(function($subject){
                $newSubject = new Subject();
                $newSubject->name = $subject['name'];
                $newSubject->save();
            });
        }
    }



            // english grade 6-10
            ['name' => 'Buddhism', 'media_id' => '2']],
            ['name' => 'Christianity', 'media_id' => '2']],
            ['name' => 'Catholic', 'media_id' => '2']],
            ['name' => 'Shivenary', 'media_id' => '2']],
            ['name' => 'Sinhala Language', 'media_id' => '2']],
            ['name' => 'English Language', 'media_id' => '2']],
            ['name' => 'Mathematics', 'media_id' => '2']],
            ['name' => 'Science', 'media_id' => '2']],
            ['name' => 'History', 'media_id' => '2']],
            ['name' => 'Geography', 'media_id' => '2']],
            ['name' => 'Life skills &-Citizenshipn Education', 'media_id' => '2']],
            ['name' => 'Dancing', 'media_id' => '2']],
            ['name' => 'Eastern Music', 'media_id' => '2']],
            ['name' => 'Western Music', 'media_id' => '2']],
            ['name' => 'Art', 'media_id' => '2']],
            ['name' => 'Drama & Theatre', 'media_id' => '2']],
            ['name' => 'Practical &-Technical Studies', 'media_id' => '2']],
            ['name' => 'Health & Physical Education', 'media_id' => '2']],

            // grade 10-11 special
            ['name' => 'Sinhala Language & Literature', 'media_id' => '2']],
            ['name' => 'Enterpreneurial Education', 'media_id' => '2']],
            ['name' => 'Business Studies & Accounts', 'media_id' => '2']],
            ['name' => 'Traditional Dancing', 'media_id' => '2']],
            ['name' => 'Sinhala Literature', 'media_id' => '2']],
            ['name' => 'English Literature', 'media_id' => '2']],
            ['name' => 'Information & Communication Technology', 'media_id' => '2']],
            ['name' => 'Agriculture & Food Technology', 'media_id' => '2']],
            ['name' => 'Art & Craft', 'media_id' => '2']],
            ['name' => 'Home Economics', 'media_id' => '2']],
            ['name' => 'Health & Physical Education', 'media_id' => '2']],

            // tamil
            ['name' => 'දෙමළ භාෂාව', 'media_id' => '3']],
            ['name' => 'Tamil Language', 'media_id' => '3']],


