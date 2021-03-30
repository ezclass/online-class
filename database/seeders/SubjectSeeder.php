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
            ['name' => ['si' =>'ඉංග්‍රීසි',  'en' => 'English']],
            ['name' => ['si' =>'දෙමළ',  'en' => 'Tamil']],

            //grade 6-9 common
            ['name' => ['si' =>'බුද්ධාගම',  'en' => 'Buddhism']],
            ['name' => ['si' =>'ක්‍රිස්තියානි ආගම',  'en' => 'Christianity']],
            ['name' => ['si' =>'කතෝලික ආගම',  'en' => 'Catholic']],
            ['name' => ['si' =>'ඉස්ලාම්',  'en' => 'Shivenary']],
            ['name' => ['si' =>'සිංහල භාෂාව',  'en' => 'Sinhala Language']],
            ['name' => ['si' =>'සිංහල භාෂාව හා සාහිත්‍ය',  'en' => 'Sinhala Language & Literature']],
            ['name' => ['si' =>'ඉංග්‍රීසි භාෂාව',  'en' => 'English Language']],
            ['name' => ['si' =>'විද්‍යාව',  'en' => 'Science']],
            ['name' => ['si' =>'ඉතිහාසය',  'en' => 'History']],
            ['name' => ['si' =>'භූගෝල විද්‍යාව',  'en' => 'Geography']],
            ['name' => ['si' =>'ජීවන නිපුණතා හා පුරවැසි අධ්‍යාපනය',  'en' => 'Life skills &-Citizenshipn Education']],
            ['name' => ['si' =>'පුරවැසි අධ්‍යාපනය',  'en' => 'Citizen Education']],
            ['name' => ['si' =>'නර්තනය',  'en' => 'Dancing']],
            ['name' => ['si' =>'පෙරදිග සංගීතය',  'en' => 'Eastern Music']],
            ['name' => ['si' =>'බටහිර සංගීතය',  'en' => 'Western Music']],
            ['name' => ['si' =>'චිත්‍ර',  'en' => 'Art']],
            ['name' => ['si' =>'නාට්‍ය හා රංග කලාව',  'en' => 'Drama & Theatre']],
            ['name' => ['si' =>'ප්‍රායෝගික හා තාක්ෂණ කුසලතා',  'en' => 'Practical &-Technical Studies']],
            ['name' => ['si' =>'සෞඛ්‍ය හා ශාරීරික අධ්‍යාපනය',  'en' => 'Health & Physical Education']],

            // grade 10-11 special
            ['name' => ['si' =>'නිර්මාණකරනය හා යාන්ත්‍රික තාක්ෂණවේදය',  'en' => 'Design and Mechanical Technology']],
            ['name' => ['si' =>'ගෘහ ආර්ථික විද්‍යාව',  'en' => 'Home Economics']],
            ['name' => ['si' =>'කෘෂි හා ආහාර තාක්ෂණවේදය',  'en' => 'Agriculture & Food Technology']],
            ['name' => ['si' =>'ජලජ ජීව සම්පත් තාක්ෂණය',  'en' => 'Aquatic Biological Resources Technology']],
            ['name' => ['si' =>'නිර්මාණකරනය හා ඉදිකිරීම් තාක්ෂණවේදය',  'en' => 'Design and Construction Technology']],
            ['name' => ['si' =>'ශිල්ප කලා',  'en' => '']],

            // grade 12-13 special
            ['name' => ['si' =>'භෞතික විද්‍යාව',  'en' => 'Physics']],
            ['name' => ['si' =>'රසායන විද්‍යාව',  'en' => 'Chemistry']],
            ['name' => ['si' =>'කෘෂි විද්‍යාව',  'en' => 'Agriculture Science']],
            ['name' => ['si' =>'ජීව විද්‍යාව',  'en' => 'Biology']],
            ['name' => ['si' =>'සංයුක්ත ගණිතය',  'en' => 'Combined Maths']],
            ['name' => ['si' =>'ආර්ථික විද්‍යාව',  'en' => 'Economics']],
            ['name' => ['si' =>'තර්කනය සහ විද්‍යාත්මක ක්‍රමය',  'en' => 'Logic and the Scientific Method']],
            ['name' => ['si' =>'දේශපාලන විද්‍යාව',  'en' => 'Political Science']],
            ['name' => ['si' =>'ව්‍යාපාර සංඛ්‍යානය',  'en' => 'Business Statistics']],
            ['name' => ['si' =>'ව්‍යාපාර අධ්‍යනය',  'en' => 'Business Studies']],
            ['name' => ['si' =>'ගිණුම්කරණය',  'en' => 'Accounting']],
            ['name' => ['si' =>'තොරතුරු හා සන්නිවේදන තාක්ෂණය',  'en' => 'Information and Communication Technology']],
            ['name' => ['si' =>'තාක්ෂනය සදහා විද්‍යාව',  'en' => 'Science for Technology']],
            ['name' => ['si' =>'ඉංජිනේරු තාක්ෂනය',  'en' => 'Engineering Technology']],
            ['name' => ['si' =>'ජෛව පද්ධති තාක්ෂනය',  'en' => 'Biosystems Technology']],

            ];
            collect($subjects)
            ->each(function($subject){
                $newSubject = new Subject();
                $newSubject->name = $subject['name'];
                $newSubject->save();
            });
        }
    }


/*
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
*/

