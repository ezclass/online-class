<x-app-layout>

    @role('teacher')
    <div class="mt-10 pt-8 pb-8 bg-yellow-100">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
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

                <x-success-button class="ml-3">
                    {{ __('Create') }}
                </x-success-button>
            </form>
        </div>
    </div>
    @endrole

    @foreach($program as $program)
    <div class="hover:bg-gray-100 m-7 max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
        <div class="sm:flex">
            <div class="md:flex-shrink-0">
                <img class="h-48 w-full object-cover md:w-48" src="{{ asset('storage/class_image/'.$program->image)}}" alt="Man looking at item at a store">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-lg text-indigo-500 font-semibold">{{ $program->name }}</div>
                <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{ $program->grade }}</a>
                <p class="mt-2 text-gray-500">{{ $program->subject }}</p>
                <p>{{ $program->medium }}</p>
                <p>
                <div class="mt-2 flex space-x-4">
                    <a href="{{route('lesson')}}">
                        <x-primary-button>
                            Lesson
                        </x-primary-button>
                    </a>
                    <a href="{{route('update.class.view',$program->id)}}">
                        <x-success-button>
                            Update
                        </x-success-button>
                    </a>
                    <a href="{{route('delete.class', $program->id)}}">
                        <x-danger-button class="">
                            Delete
                        </x-danger-button>
                    </a>
                </div>
                </p>
            </div>
        </div>
    </div>
    @endforeach


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
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි&nbsp;ආගම", "කතෝලික&nbsp;ආගම", "ඉස්ලාම්", "සිංහල&nbsp;භාෂාව", "ඉංග්‍රීසි&nbsp;භාෂාව", "දෙමළ&nbsp;භාෂාව", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල&nbsp;විද්‍යාව", "ජීවන&nbsp;නිපුණතා&nbsp;හා&nbsp;පුරවැසි&nbsp;අධ්‍යාපනය", "නර්තනය", "පෙරදිග&nbsp;සංගීතය", "බටහිර&nbsp;සංගීතය", "චිත්‍ර&nbsp;කලාව", "නාට්‍ය&nbsp;හා&nbsp;රංග&nbsp;කලාව", "ප්‍රායෝගික&nbsp;හා&nbsp;තාක්ෂණ&nbsp;කුසලතා", "සෞඛ්‍ය&nbsp;හා&nbsp;ශාරීරික&nbsp;අධ්‍යාපනය"];
            } else if (g === "Grade-6") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholic", "Shivenary", "Sinhala&nbsp;Language", "English&nbsp;Language", "Mathematics", "Science", "History", "Geography", "Life&nbsp;skills&nbsp;&-Citizenshipn&nbsp;Education", "Dancing", "Eastern&nbsp;Music", "Western&nbsp;Music", "Art", "Drama&nbsp;&&nbsp;Theatre", "Practical&nbsp;&-Technical&nbsp;Studies", "Health&nbsp;& Physical&nbsp;Education", "Tamil&nbsp;Language"];
            } else if (g === "7-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි&nbsp;ආගම", "කතෝලික&nbsp;ආගම", "ඉස්ලාම්", "සිංහල&nbsp;භාෂාව", "ඉංග්‍රීසි&nbsp;භාෂාව", "දෙමළ&nbsp;භාෂාව", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල&nbsp;විද්‍යාව", "ජීවන&nbsp;නිපුණතා&nbsp;හා&nbsp;පුරවැසි&nbsp;අධ්‍යාපනය", "නර්තනය", "පෙරදිග&nbsp;සංගීතය", "බටහිර&nbsp;සංගීතය", "චිත්‍ර&nbsp;කලාව", "නාට්‍ය&nbsp;හා&nbsp;රංග&nbsp;කලාව", "ප්‍රායෝගික&nbsp;හා&nbsp;තාක්ෂණ&nbsp;කුසලතා", "සෞඛ්‍ය&nbsp;හා&nbsp;ශාරීරික&nbsp;අධ්‍යාපනය"];
            } else if (g === "Grade-7") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholic", "Shivenary", "Sinhala&nbsp;Language", "English&nbsp;Language", "Mathematics", "Science", "History", "Geography", "Life&nbsp;skills&nbsp;&&nbsp;Citizenshipn&nbsp;Education", "Dancing", "Eastern&nbsp;Music", "Western&nbsp;Music", "Art", "Drama&nbsp;&&nbsp;Theatre", "Practical&nbsp;&&nbsp;Technical&nbsp;Studies", "Health&nbsp;&&nbsp;Physical&nbsp;Education", "Tamil&nbsp;Language"];
            } else if (g === "8-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි&nbsp;ආගම", "කතෝලික&nbsp;ආගම", "ඉස්ලාම්", "සිංහල&nbsp;භාෂාව", "ඉංග්‍රීසි&nbsp;භාෂාව", "දෙමළ&nbsp;භාෂාව", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල&nbsp;විද්‍යාව", "ජීවන&nbsp;නිපුණතා&nbsp;හා&nbsp;පුරවැසි&nbsp;අධ්‍යාපනය", "නර්තනය", "පෙරදිග&nbsp;සංගීතය", "බටහිර&nbsp;සංගීතය", "චිත්‍ර&nbsp;කලාව", "නාට්‍ය&nbsp;හා&nbsp;රංග&nbsp;කලාව", "ප්‍රායෝගික&nbsp;හා&nbsp;තාක්ෂණ&nbsp;කුසලතා", "සෞඛ්‍ය&nbsp;හා&nbsp;ශාරීරික&nbsp;අධ්‍යාපනය"];
            } else if (g === "Grade-8") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholic", "Shivenary", "Sinhala&nbsp;Language", "English&nbsp;Language", "Mathematics", "Science", "History", "Geography", "Life&nbsp;skills&nbsp;&&nbsp;Citizenshipn&nbsp;Education", "Dancing", "Eastern&nbsp;Music", "Western&nbsp;Music", "Art", "Drama&nbsp;&&nbsp;Theatre", "Practical&nbsp;&&nbsp;Technical&nbsp;Studies", "Health&nbsp;&&nbsp;Physical&nbsp;Education", "Tamil&nbsp;Language"];
            } else if (g === "9-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි&nbsp;ආගම", "කතෝලික&nbsp;ආගම", "ඉස්ලාම්", "සිංහල&nbsp;භාෂාව", "ඉංග්‍රීසි&nbsp;භාෂාව", "දෙමළ&nbsp;භාෂාව", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල&nbsp;විද්‍යාව", "ජීවන&nbsp;නිපුණතා&nbsp;හා&nbsp;පුරවැසි&nbsp;අධ්‍යාපනය", "නර්තනය", "පෙරදිග&nbsp;සංගීතය", "බටහිර&nbsp;සංගීතය", "චිත්‍ර&nbsp;කලාව", "නාට්‍ය&nbsp;හා&nbsp;රංග&nbsp;කලාව", "ප්‍රායෝගික&nbsp;හා&nbsp;තාක්ෂණ&nbsp;කුසලතා", "සෞඛ්‍ය&nbsp;හා&nbsp;ශාරීරික&nbsp;අධ්‍යාපනය"];
            } else if (g === "Grade-9") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholic", "Shivenary", "Sinhala&nbsp;Language", "English&nbsp;Language", "Mathematics", "Science", "History", "Geography", "Life&nbsp;skills&nbsp;&&nbsp;Citizenshipn&nbsp;Education", "Dancing", "Eastern&nbsp;Music", "Western&nbsp;Music", "Art", "Drama&nbsp;&&nbsp;Theatre", "Practical&nbsp;&&nbsp;Technical&nbsp;Studies", "Health&nbsp;&&nbsp;Physical&nbsp;Education", "Tamil&nbsp;Language"];
            } else if (g === "10-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි&nbsp;ආගම", "කතෝලික&nbsp;ආගම", "ඉස්ලාම්", "සිංහල&nbsp;භාෂාව&nbsp;හා&nbsp;සාහිත්‍ය", "සිංහල&nbsp;සාහිත්‍යය", "ඉංග්‍රීසි", "ඉංග්‍රීසි&nbsp;සාහිත්‍යය", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල&nbsp;විද්‍යාව", "පුරවැසි&nbsp;අධ්‍යාපනය", "ව්‍යවසායකත්ව&nbsp;අධ්‍යයනය", "ව්‍යාපාර&nbsp;අධ්‍යයනය&nbsp;හා&nbsp;ගිණුම්කරණය", "සෞඛ්‍ය&nbsp;හා&nbsp;ශාරීරික&nbsp;අධ්‍යාපනය", "පෙරදිග&nbsp;සංගීතය", "අපරදිග&nbsp;සංගීතය", "චිත්‍ර&nbsp;කලාව", "නාට්‍ය&nbsp;හා&nbsp;රංග&nbsp;කලාව", "නිර්මාණකරනය&nbsp;හා&nbsp;යාන්ත්‍රික&nbsp;තාක්ෂණවේදය", "ගෘහ&nbsp;ආර්ථික&nbsp;විද්‍යාව", "තොරතුරු&nbsp;හා&nbsp;සන්නිවේදන&nbsp;තාක්ෂණය", "කෘෂි&nbsp;හා&nbsp;ආහාර&nbsp;තාක්ෂණවේදය", "ජලජ&nbsp;ජීව&nbsp;සම්පත්&nbsp;තාක්ෂණය", "නිර්මාණකරනය&nbsp;හා&nbsp;ඉදිකිරීම්&nbsp;තාක්ෂණවේදය", "ශිල්ප&nbsp;කලා"];
            } else if (g === "Grade-10") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholism", "Islam", "Sinhala&nbsp;Language&nbsp;&&nbsp;Literature", "English", "Mathematics", "Science", "History", "Geography", "Citizenshipn&nbsp;Education", "Enterpreneurial&nbsp;Education", "Business&nbsp;Studies&nbsp;&&nbsp;Accounts", "Eastern&nbsp;Music", "Western&nbsp;Music", "Art", "Traditional&nbsp;Dancing", "Drama&nbsp;&&nbsp;Theatre", "Sinhala&nbsp;Literature", "English&nbsp;Literature", "Information&nbsp;&&nbsp;Communication&nbsp;Technology", "Agriculture&nbsp;&&nbsp;Food&nbsp;Technology", "Art&nbsp;&&nbsp;Craft", "Home&nbsp;Economics", "Health&nbsp;&&nbsp;Physical&nbsp;Education"];
            } else if (g === "11-ශ්‍රේණිය") {
                var arr = ["විෂය තෝරන්න", "බුද්ධාගම", "ක්‍රිස්තියානි&nbsp;ආගම", "කතෝලික&nbsp;ආගම", "ඉස්ලාම්", "සිංහල&nbsp;භාෂාව&nbsp;හා&nbsp;සාහිත්‍ය", "සිංහල&nbsp;සාහිත්‍යය", "ඉංග්‍රීසි", "ඉංග්‍රීසි&nbsp;සාහිත්‍යය", "ගණිතය", "විද්‍යාව", "ඉතිහාසය", "භූගෝල&nbsp;විද්‍යාව", "පුරවැසි&nbsp;අධ්‍යාපනය", "ව්‍යවසායකත්ව&nbsp;අධ්‍යයනය", "ව්‍යාපාර&nbsp;අධ්‍යයනය&nbsp;හා&nbsp;ගිණුම්කරණය", "සෞඛ්‍ය&nbsp;හා&nbsp;ශාරීරික&nbsp;අධ්‍යාපනය", "පෙරදිග&nbsp;සංගීතය", "අපරදිග&nbsp;සංගීතය", "චිත්‍ර&nbsp;කලාව", "නාට්‍ය&nbsp;හා&nbsp;රංග&nbsp;කලාව", "නිර්මාණකරනය&nbsp;හා&nbsp;යාන්ත්‍රික&nbsp;තාක්ෂණවේදය", "ගෘහ&nbsp;ආර්ථික&nbsp;විද්‍යාව", "තොරතුරු&nbsp;හා&nbsp;සන්නිවේදන&nbsp;තාක්ෂණය", "කෘෂි&nbsp;හා&nbsp;ආහාර&nbsp;තාක්ෂණවේදය", "ජලජ&nbsp;ජීව&nbsp;සම්පත්&nbsp;තාක්ෂණය", "නිර්මාණකරනය&nbsp;හා&nbsp;ඉදිකිරීම්&nbsp;තාක්ෂණවේදය", "ශිල්ප&nbsp;කලා"];
            } else if (g === "Grade-11") {
                var arr = ["Select Subject", "Buddhism", "Christianity", "Catholism", "Islam", "Sinhala&nbsp;Language&nbsp;&&nbsp;Literature", "English", "Mathematics", "Science", "History", "Geography", "Citizenshipn&nbsp;Education", "Enterpreneurial&nbsp;Education", "Business&nbsp;Studies&nbsp;&&nbsp;Accounts", "Eastern&nbsp;Music", "Western&nbsp;Music", "Art", "Traditional&nbsp;Dancing", "Drama&nbsp;&&nbsp;Theatre", "Sinhala&nbsp;Literature", "English&nbsp;Literature", "Information&nbsp;&&nbsp;Communication&nbsp;Technology", "Agriculture&nbsp;&&nbsp;Food&nbsp;Technology", "Art&nbsp;&&nbsp;Craft", "Home&nbsp;Economics", "Health&nbsp;&&nbsp;Physical&nbsp;Education"];
            } else if (g === "2020", "2001", "2022") {
                var arr = ["විෂය තෝරන්න", "භෞතික&nbsp;විද්‍යාව", "රසායන&nbsp;විද්‍යාව", "කෘෂි&nbsp;විද්‍යාව", "ජීව&nbsp;විද්‍යාව", "ගණිතය", "සංයුක්ත&nbsp;ගණිතය", "සිංහල&nbsp;භාෂාව&nbsp;හා&nbsp;සාහිත්‍ය", "ආර්ථික&nbsp;විද්‍යාව", "තර්කනය&nbsp;සහ&nbsp;විද්‍යාත්මක&nbsp;ක්‍රමය", "භූගෝල&nbsp;විද්‍යාව", "දේශපාලන&nbsp;විද්‍යාව", "ඉතිහාසය", "ආර්ථික&nbsp;විද්‍යාව", "ව්‍යාපාර&nbsp;සංඛ්‍යානය", "ව්‍යාපාර&nbsp;අධ්‍යනය", "ගිණුම්කරණය", "චිත්‍ර", "නාට්‍ය&nbsp;හා&nbsp;රංග&nbsp;කලාව", "නර්තනය", "පෙරදිග&nbsp;සංගීතය", "බටහිර&nbsp;සංගීතය", "තොරතුරු&nbsp;හා&nbsp;සන්නිවේදන&nbsp;තාක්ෂණය", "තාක්ෂනය&nbsp;සදහා&nbsp;විද්‍යාව", "ඉංජිනේරු&nbsp;තාක්ෂනය", "ජෛව&nbsp;පද්ධති&nbsp;තාක්ෂනය"];
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
