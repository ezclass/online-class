<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        Subject::query()->insert([
            //grade 5
            ['name' => 'සිංහල', 'media_id' => '1'],
            ['name' => 'ගණිතය', 'media_id' => '1'],
            ['name' => 'පරිසරය', 'media_id' => '1'],
            ['name' => 'බුද්ධදර්මය', 'media_id' => '1'],
            ['name' => 'ඉංග්‍රීසි', 'media_id' => '1'],

            //grade 6-9 common
            ['name' => 'බුද්ධාගම', 'media_id' => '1'],
            ['name' => 'ක්‍රිස්තියානි ආගම', 'media_id' => '1'],
            ['name' => 'කතෝලික ආගම', 'media_id' => '1'],
            ['name' => 'ඉස්ලාම්', 'media_id' => '1'],
            ['name' => 'සිංහල භාෂාව', 'media_id' => '1'],
            ['name' => 'සිංහල භාෂාව හා සාහිත්‍ය', 'media_id' => '1'],
            ['name' => 'ඉංග්‍රීසි භාෂාව', 'media_id' => '1'],
            ['name' => 'විද්‍යාව', 'media_id' => '1'],
            ['name' => 'ඉතිහාසය', 'media_id' => '1'],
            ['name' => 'භූගෝල විද්‍යාව', 'media_id' => '1'],
            ['name' => 'ජීවන නිපුණතා හා පුරවැසි අධ්‍යාපනය', 'media_id' => '1'],
            ['name' => 'පුරවැසි අධ්‍යාපනය', 'media_id' => '1'],
            ['name' => 'නර්තනය', 'media_id' => '1'],
            ['name' => 'පෙරදිග සංගීතය', 'media_id' => '1'],
            ['name' => 'අපරදිග සංගීතය', 'media_id' => '1'],
            ['name' => 'බටහිර සංගීතය', 'media_id' => '1'],
            ['name' => 'චිත්‍ර කලාව', 'media_id' => '1'],
            ['name' => 'නාට්‍ය හා රංග කලාව', 'media_id' => '1'],
            ['name' => 'ප්‍රායෝගික හා තාක්ෂණ කුසලතා', 'media_id' => '1'],
            ['name' => 'සෞඛ්‍ය හා ශාරීරික අධ්‍යාපනය', 'media_id' => '1'],

            // grade 10-11 special
            ['name' => 'නිර්මාණකරනය හා යාන්ත්‍රික තාක්ෂණවේදය', 'media_id' => '1'],
            ['name' => 'ගෘහ ආර්ථික විද්‍යාව', 'media_id' => '1'],
            ['name' => 'කෘෂි හා ආහාර තාක්ෂණවේදය', 'media_id' => '1'],
            ['name' => 'ජලජ ජීව සම්පත් තාක්ෂණය', 'media_id' => '1'],
            ['name' => 'නිර්මාණකරනය හා ඉදිකිරීම් තාක්ෂණවේදය', 'media_id' => '1'],
            ['name' => 'ශිල්ප කලා', 'media_id' => '1'],

            // grade 12-13 special
            ['name' => 'භෞතික විද්‍යාව', 'media_id' => '1'],
            ['name' => 'රසායන විද්‍යාව', 'media_id' => '1'],
            ['name' => 'කෘෂි විද්‍යාව', 'media_id' => '1'],
            ['name' => 'ජීව විද්‍යාව', 'media_id' => '1'],
            ['name' => 'සංයුක්ත ගණිතය', 'media_id' => '1'],
            ['name' => 'ආර්ථික විද්‍යාව', 'media_id' => '1'],
            ['name' => 'තර්කනය සහ විද්‍යාත්මක ක්‍රමය', 'media_id' => '1'],
            ['name' => 'දේශපාලන විද්‍යාව', 'media_id' => '1'],
            ['name' => 'ව්‍යාපාර සංඛ්‍යානය', 'media_id' => '1'],
            ['name' => 'ව්‍යාපාර අධ්‍යනය', 'media_id' => '1'],
            ['name' => 'ගිණුම්කරණය', 'media_id' => '1'],
            ['name' => 'චිත්‍ර', 'media_id' => '1'],
            ['name' => 'තොරතුරු හා සන්නිවේදන තාක්ෂණය', 'media_id' => '1'],
            ['name' => 'තාක්ෂනය සදහා විද්‍යාව', 'media_id' => '1'],
            ['name' => 'ඉංජිනේරු තාක්ෂනය', 'media_id' => '1'],
            ['name' => 'ජෛව පද්ධති තාක්ෂනය', 'media_id' => '1'],



            // english grade 6-10
            ['name' => 'Buddhism', 'media_id' => '2'],
            ['name' => 'Christianity', 'media_id' => '2'],
            ['name' => 'Catholic', 'media_id' => '2'],
            ['name' => 'Shivenary', 'media_id' => '2'],
            ['name' => 'Sinhala Language', 'media_id' => '2'],
            ['name' => 'English Language', 'media_id' => '2'],
            ['name' => 'Mathematics', 'media_id' => '2'],
            ['name' => 'Science', 'media_id' => '2'],
            ['name' => 'History', 'media_id' => '2'],
            ['name' => 'Geography', 'media_id' => '2'],
            ['name' => 'Life skills &-Citizenshipn Education', 'media_id' => '2'],
            ['name' => 'Dancing', 'media_id' => '2'],
            ['name' => 'Eastern Music', 'media_id' => '2'],
            ['name' => 'Western Music', 'media_id' => '2'],
            ['name' => 'Art', 'media_id' => '2'],
            ['name' => 'Drama & Theatre', 'media_id' => '2'],
            ['name' => 'Practical &-Technical Studies', 'media_id' => '2'],
            ['name' => 'Health & Physical Education', 'media_id' => '2'],

            // grade 10-11 special
            ['name' => 'Sinhala Language & Literature', 'media_id' => '2'],
            ['name' => 'Enterpreneurial Education', 'media_id' => '2'],
            ['name' => 'Business Studies & Accounts', 'media_id' => '2'],
            ['name' => 'Traditional Dancing', 'media_id' => '2'],
            ['name' => 'Sinhala Literature', 'media_id' => '2'],
            ['name' => 'English Literature', 'media_id' => '2'],
            ['name' => 'Information & Communication Technology', 'media_id' => '2'],
            ['name' => 'Agriculture & Food Technology', 'media_id' => '2'],
            ['name' => 'Art & Craft', 'media_id' => '2'],
            ['name' => 'Home Economics', 'media_id' => '2'],
            ['name' => 'Health & Physical Education', 'media_id' => '2'],

            // tamil
            ['name' => 'දෙමළ භාෂාව', 'media_id' => '3'],
            ['name' => 'Tamil Language', 'media_id' => '3'],
        ]);
    }
}
