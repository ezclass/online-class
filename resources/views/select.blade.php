<x-app-layout>


    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="pt-8 pb-8 bg-gray-300">
        <div class="px-4  max-w-3xl mx-auto space-y-6">
            <form action="{{route('create.class')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="user_id" value="{{Auth::User()->id}}">

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label for="">Your Class Name</x-label>
                        <input type="text" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
                    </div>

                    <div class="w-1/2 relative">
                        <x-label for="">Meadiam</x-label>
                        <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="meadiam" name="medium" onchange="random_function()" required>
                            <option selected disabled>Meadiam</option>
                            <option value="සිංහල මාධ්‍යය">සිංහල මාධ්‍යය</option>
                            <option value="English medium">English medium</option>
                        </select>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label for="">You are</x-label>
                        <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="youare" name="" onchange="random_function1()" required>
                            <option selected disabled>You are</option>
                        </select>
                    </div>

                    <div class="w-1/2">
                        <x-label for="">Select Grade/Year:</x-label>
                        <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="grade" name="grade" onchange="random_function3()" required>
                            <option selected disabled>Select Grade/Year</option>
                        </select>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label for="">Select Subject:</x-label>
                        <select id="subject" name="subject" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                            <option selected disabled>Select Subject</option>
                        </select>
                    </div>

                    <div class="w-1/2">
                        <x-label class="">Class Image</x-label>
                        <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500 @error('class_image') is-invalid @enderror" required>
                    </div>
                </div>

                <x-success-button type="submit" class="ml-3">
                    {{ __('Create') }}
                </x-success-button>
            </form>
        </div>
    </div>


    <!-- ----------------------- Start meadiam and subject js --------------------->

    <script>
        function random_function() {

            var m = document.getElementById("meadiam").value;
            if (m === "සිංහල මාධ්‍යය") {
                var arr = ["ඔබ:", "ප්‍රාථමික-ගුරුවරයෙකි", "සාමාන්‍ය-පෙළ-ගුරුවරයෙකි", "උසස්-පෙළ-ගුරුවරයෙකි"];
            } else if (m === "English medium") {
                var arr = ["You are:", "O/L-Teacher"];
            }

            var string = "";

            for (i = 0; i < arr.length; i++) {
                string = string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
            }
            document.getElementById("youare").innerHTML = string;
        }
    </script>

    <!-- ----------------------- End meadiam and subject js --------------------->

    <!-- ----------------------- Start teacher and Grade js --------------------->

    <script>
        function random_function1() {

            var y = document.getElementById("youare").value;
            if (y === "ප්‍රාථමික-ගුරුවරයෙකි") {
                var arr = ["ශ්‍රේණිය තෝරන්න", "1-ශ්‍රේණිය", "2-ශ්‍රේණිය", "3-ශ්‍රේණිය", "4-ශ්‍රේණිය", "5-ශ්‍රේණිය"];

            } else if (y === "primary-Teacher") {
                var arr = ["Subjects of Primary education are not conducted in English medium."];
            } else if (y === "සාමාන්‍ය-පෙළ-ගුරුවරයෙකි") {
                var arr = ["ශ්‍රේණිය තෝරන්න", "6-ශ්‍රේණිය", "7-ශ්‍රේණිය", "8-ශ්‍රේණිය", "9-ශ්‍රේණිය", "10-ශ්‍රේණිය", "11-ශ්‍රේණිය"];
            } else if (y === "O/L-Teacher") {
                var arr = ["Select Grade", "Grade-6", "Grade-7", "Grade-8", "Grade-9", "Grade-10", "Grade-11"];
            } else if (y === "උසස්-පෙළ-ගුරුවරයෙකි") {
                var arr = ["වර්ෂය තෝරන්න", "2020", "2021", "2022"];
            } else if (y === "A/L-Teacher") {
                var arr = ["Select Grade", "Grade-12/13"];
            } else if (y === "වෙනත්-ගුරුවරයෙකි") {
                var arr = ["Select Grade", "Grade-12/13"];
            } else if (y === "Other-Teacher") {
                var arr = ["Select Grade", "Grade 12-13"];
            }
            var string = "";

            for (i = 0; i < arr.length; i++) {
                string = string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
            }
            document.getElementById("grade").innerHTML = string;
        }
    </script>

    <!-- ----------------------- End teacher and Grade js --------------------->

    <!-- ----------------------- Start Grade and Subject js --------------------->
    <script>
        function random_function3() {

            var g = document.getElementById("grade").value;
            if (g === "1-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "සිංහල", "ගණිතය", "පරිසරය", "බුද්ධදර්මය", "ඉංග්‍රීසි"];
            } else if (g === "2-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "සිංහල", "ගණිතය", "පරිසරය", "බුද්ධදර්මය", "ඉංග්‍රීසි"];
            } else if (g === "3-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "සිංහල", "ගණිතය", "පරිසරය", "බුද්ධදර්මය", "ඉංග්‍රීසි"];
            } else if (g === "4-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "සිංහල", "ගණිතය", "පරිසරය", "බුද්ධදර්මය", "ඉංග්‍රීසි"];
            } else if (g === "5-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "සිංහල", "ගණිතය", "පරිසරය", "බුද්ධදර්මය", "ඉංග්‍රීසි"];
            } else if (g === "6-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි_ආගම", "කතෝලික_ආගම", "ඉස්ලාම්", "සිංහල_භාෂාව", "ඉංග්‍රීසි_භාෂාව", "දෙමළ_භාෂාව", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල_විද්‍යාව", "ජීවන_නිපුණතා_හා_පුරවැසි_අධ්‍යාපනය", "නර්තනය", "පෙරදිග_සංගීතය", "බටහිර_සංගීතය", "චිත්‍ර_කලාව", "නාට්‍ය_හා_රංග_කලාව", "ප්‍රායෝගික_හා_තාක්ෂණ_කුසලතා", "සෞඛ්‍ය_හා_ශාරීරික_අධ්‍යාපනය"];
            } else if (g === "Grade-6") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholic", "Shivenary", "Sinhala_Language", "English_Language", "Mathematics", "Science", "History", "Geography", "Life_skills_&-Citizenshipn_Education", "Dancing", "Eastern_Music", "Western_Music", "Art", "Drama_&_Theatre", "Practical_&-Technical_Studies", "Health_& Physical_Education", "Tamil_Language"];
            } else if (g === "7-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි_ආගම", "කතෝලික_ආගම", "ඉස්ලාම්", "සිංහල_භාෂාව", "ඉංග්‍රීසි_භාෂාව", "දෙමළ_භාෂාව", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල_විද්‍යාව", "ජීවන_නිපුණතා_හා_පුරවැසි_අධ්‍යාපනය", "නර්තනය", "පෙරදිග_සංගීතය", "බටහිර_සංගීතය", "චිත්‍ර_කලාව", "නාට්‍ය_හා_රංග_කලාව", "ප්‍රායෝගික_හා_තාක්ෂණ_කුසලතා", "සෞඛ්‍ය_හා_ශාරීරික_අධ්‍යාපනය"];
            } else if (g === "Grade-7") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholic", "Shivenary", "Sinhala_Language", "English_Language", "Mathematics", "Science", "History", "Geography", "Life_skills_&_Citizenshipn_Education", "Dancing", "Eastern_Music", "Western_Music", "Art", "Drama_&_Theatre", "Practical_&_Technical_Studies", "Health_&_Physical_Education", "Tamil_Language"];
            } else if (g === "8-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි_ආගම", "කතෝලික_ආගම", "ඉස්ලාම්", "සිංහල_භාෂාව", "ඉංග්‍රීසි_භාෂාව", "දෙමළ_භාෂාව", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල_විද්‍යාව", "ජීවන_නිපුණතා_හා_පුරවැසි_අධ්‍යාපනය", "නර්තනය", "පෙරදිග_සංගීතය", "බටහිර_සංගීතය", "චිත්‍ර_කලාව", "නාට්‍ය_හා_රංග_කලාව", "ප්‍රායෝගික_හා_තාක්ෂණ_කුසලතා", "සෞඛ්‍ය_හා_ශාරීරික_අධ්‍යාපනය"];
            } else if (g === "Grade-8") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholic", "Shivenary", "Sinhala_Language", "English_Language", "Mathematics", "Science", "History", "Geography", "Life_skills_&_Citizenshipn_Education", "Dancing", "Eastern_Music", "Western_Music", "Art", "Drama_&_Theatre", "Practical_&_Technical_Studies", "Health_&_Physical_Education", "Tamil_Language"];
            } else if (g === "9-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි_ආගම", "කතෝලික_ආගම", "ඉස්ලාම්", "සිංහල_භාෂාව", "ඉංග්‍රීසි_භාෂාව", "දෙමළ_භාෂාව", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල_විද්‍යාව", "ජීවන_නිපුණතා_හා_පුරවැසි_අධ්‍යාපනය", "නර්තනය", "පෙරදිග_සංගීතය", "බටහිර_සංගීතය", "චිත්‍ර_කලාව", "නාට්‍ය_හා_රංග_කලාව", "ප්‍රායෝගික_හා_තාක්ෂණ_කුසලතා", "සෞඛ්‍ය_හා_ශාරීරික_අධ්‍යාපනය"];
            } else if (g === "Grade-9") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholic", "Shivenary", "Sinhala_Language", "English_Language", "Mathematics", "Science", "History", "Geography", "Life_skills_&_Citizenshipn_Education", "Dancing", "Eastern_Music", "Western_Music", "Art", "Drama_&_Theatre", "Practical_&_Technical_Studies", "Health_&_Physical_Education", "Tamil_Language"];
            } else if (g === "10-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි_ආගම", "කතෝලික_ආගම", "ඉස්ලාම්", "සිංහල_භාෂාව_හා_සාහිත්‍ය", "සිංහල_සාහිත්‍යය", "ඉංග්‍රීසි", "ඉංග්‍රීසි_සාහිත්‍යය", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල_විද්‍යාව", "පුරවැසි_අධ්‍යාපනය", "ව්‍යවසායකත්ව_අධ්‍යයනය", "ව්‍යාපාර_අධ්‍යයනය_හා_ගිණුම්කරණය", "සෞඛ්‍ය_හා_ශාරීරික_අධ්‍යාපනය", "පෙරදිග_සංගීතය", "අපරදිග_සංගීතය", "චිත්‍ර_කලාව", "නාට්‍ය_හා_රංග_කලාව", "නිර්මාණකරනය_හා_යාන්ත්‍රික_තාක්ෂණවේදය", "ගෘහ_ආර්ථික_විද්‍යාව", "තොරතුරු_හා_සන්නිවේදන_තාක්ෂණය", "කෘෂි_හා_ආහාර_තාක්ෂණවේදය", "ජලජ_ජීව_සම්පත්_තාක්ෂණය", "නිර්මාණකරනය_හා_ඉදිකිරීම්_තාක්ෂණවේදය", "ශිල්ප_කලා"];
            } else if (g === "Grade-10") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholism", "Islam", "Sinhala_Language_&_Literature", "English", "Mathematics", "Science", "History", "Geography", "Citizenshipn_Education", "Enterpreneurial_Education", "Business_Studies_&_Accounts", "Eastern_Music", "Western_Music", "Art", "Traditional_Dancing", "Drama_&_Theatre", "Sinhala_Literature", "English_Literature", "Information_&_Communication_Technology", "Agriculture_&_Food_Technology", "Art_&_Craft", "Home_Economics", "Health_&_Physical_Education"];
            } else if (g === "11-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි_ආගම", "කතෝලික_ආගම", "ඉස්ලාම්", "සිංහල_භාෂාව_හා_සාහිත්‍ය", "සිංහල_සාහිත්‍යය", "ඉංග්‍රීසි", "ඉංග්‍රීසි_සාහිත්‍යය", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල_විද්‍යාව", "පුරවැසි_අධ්‍යාපනය", "ව්‍යවසායකත්ව_අධ්‍යයනය", "ව්‍යාපාර_අධ්‍යයනය_හා_ගිණුම්කරණය", "සෞඛ්‍ය_හා_ශාරීරික_අධ්‍යාපනය", "පෙරදිග_සංගීතය", "අපරදිග_සංගීතය", "චිත්‍ර_කලාව", "නාට්‍ය_හා_රංග_කලාව", "නිර්මාණකරනය_හා_යාන්ත්‍රික_තාක්ෂණවේදය", "ගෘහ_ආර්ථික_විද්‍යාව", "තොරතුරු_හා_සන්නිවේදන_තාක්ෂණය", "කෘෂි_හා_ආහාර_තාක්ෂණවේදය", "ජලජ_ජීව_සම්පත්_තාක්ෂණය", "නිර්මාණකරනය_හා_ඉදිකිරීම්_තාක්ෂණවේදය", "ශිල්ප_කලා"];
            } else if (g === "Grade-11") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholism", "Islam", "Sinhala_Language_&_Literature", "English", "Mathematics", "Science", "History", "Geography", "Citizenshipn_Education", "Enterpreneurial_Education", "Business_Studies_&_Accounts", "Eastern_Music", "Western_Music", "Art", "Traditional_Dancing", "Drama_&_Theatre", "Sinhala_Literature", "English_Literature", "Information_&_Communication_Technology", "Agriculture_&_Food_Technology", "Art_&_Craft", "Home_Economics", "Health_&_Physical_Education"];
            } else if (g === "2020", "2001", "2022") {
                var arr = ["විෂය තෝරන්න", "භෞතික_විද්‍යාව", "රසායන_විද්‍යාව", "කෘෂි_විද්‍යාව", "ජීව_විද්‍යාව", "ගණිතය", "සංයුක්ත_ගණිතය", "සිංහල_භාෂාව_හා_සාහිත්‍ය", "ආර්ථික_විද්‍යාව", "තර්කනය_සහ_විද්‍යාත්මක_ක්‍රමය", "භූගෝල_විද්‍යාව", "දේශපාලන_විද්‍යාව", "ඉතිහාසය", "ව්‍යාපාර_සංඛ්‍යානය", "ව්‍යාපාර_අධ්‍යනය", "ගිණුම්කරණය", "චිත්‍ර", "නාට්‍ය_හා_රංග_කලාව", "නර්තනය", "පෙරදිග_සංගීතය", "බටහිර_සංගීතය", "තොරතුරු_හා_සන්නිවේදන_තාක්ෂණය", "තාක්ෂනය_සදහා_විද්‍යාව", "ඉංජිනේරු_තාක්ෂනය", "ජෛව_පද්ධති_තාක්ෂනය"];
            }

            var string = "";

            for (i = 0; i < arr.length; i++) {
                string = string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
            }
            document.getElementById("subject").innerHTML = string;
        }
    </script>
    <!-- ----------------------- End  Grade and Subject js --------------------->

</x-app-layout>
