<form action="{{route('create.program')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mt-4">
        <label for="grade" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Select Grade/Year <span class="text-red-500">*</span></label>
        <select name="grade" id="grade" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            <option selected disabled>Grade/Year</option>
            @foreach($grades as $grade)
            <option value="{{$grade->getRouteKey()}}">{{$grade->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-4">
        <label for="medium" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Select Medium <span class="text-red-500">*</span></label>
        <select id="medium" name="medium" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            <option selected disabled>Medium</option>
            @foreach($languages as $language)
            <option value="{{$language->getRouteKey()}}">{{$language->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-4">
        <label for="subject" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Select Subject <span class="text-red-500">*</span></label>
        <select id="subject" name="subject" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            <option selected disabled>Subject</option>
            @foreach($subjects as $subject)
            <option value="{{$subject->getRouteKey()}}">{{$subject->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-4">
        <label for="class_type" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Class Type <span class="text-red-500">*</span></label>
        <select id="class_type" name="class_type" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            <option selected disabled>Class Type</option>
            <option value="Theory">Theory</option>
            <option value="Paper">Paper</option>
            <option value="Revision">Revision</option>
        </select>
    </div>

    <div class="mt-4">
        <label for="fees" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Class Fees for the Month <span class="text-red-500">*</span></label>
        <input type="number" name="fees" id="fees" :value="old('fees')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    </div>

    <div class="mt-4">
        <label for="start_date" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Class Start Date <span class="text-red-500">*</span></label>
        <input type="date" name="start_date" id="start_date" :value="old('start_date')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    </div>

    <div class="mt-4">
        <label for="end_date" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Class End Date <span class="text-red-500">*</span></label>
        <input type="date" name="end_date" id="end_date" :value="old('end_date')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    </div>

    <div>
        <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
        <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>

        <style>
            [x-cloak] {
                display: none;
            }
        </style>

        <div class="mt-4">
            <label for="day" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Class Day <span class="text-red-500">*</span></label>
            <select x-cloak id="select">
                <option value=" Monday">Monday</option>
                <option value=" Tuesday">Tuesday</option>
                <option value=" Wednesday">Wednesday</option>
                <option value=" Thursday">Thursday</option>
                <option value=" Friday">Friday</option>
                <option value=" Saturday">Saturday</option>
                <option value=" Sunday">Sunday</option>
            </select>

            <div x-data="dropdown()" x-init="loadOptions()" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <input name="day" type="hidden" x-bind:value="selectedValues()">
                <div class="inline-block relative w-64">
                    <div class="flex flex-col items-center relative">
                        <div x-on:click="open" class="w-full  svelte-1l8159u">
                            <div class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                                <div class="flex flex-auto flex-wrap">
                                    <template x-for="(option, index) in selected" :key="options[option].value">
                                        <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                                            <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option]" x-text="options[option].text"></div>
                                            <div class="flex flex-auto flex-row-reverse">
                                                <div x-on:click="remove(index,option)">
                                                    <svg class="fill-current h-6 w-6 " role="button" viewBox="0 0 20 20">
                                                        <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                         c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                         l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                         C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                    <div x-show="selected.length    == 0" class="flex-1">
                                        <input placeholder="Select a option" class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" x-bind:value="selectedValues()">
                                    </div>
                                </div>
                                <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">

                                    <button type="button" x-show="isOpen() === true" x-on:click="open" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                        <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                            <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83 c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25 L17.418,6.109z" />
                                        </svg>

                                    </button>
                                    <button type="button" x-show="isOpen() === false" @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                            <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83 c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z" />
                                        </svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4">
                            <div x-show.transition.origin.top="isOpen()" class="absolute shadow top-100 bg-white z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj" x-on:click.away="close">
                                <div class="flex flex-col w-full">
                                    <template x-for="(option,index) in options" :key="option">
                                        <div>
                                            <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100" @click="select(index,$event)">
                                                <div x-bind:class="option.selected ? 'border-teal-600' : ''" class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                    <div class="w-full items-center flex">
                                                        <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    function dropdown() {
                        return {
                            options: [],
                            selected: [],
                            show: false,
                            open() {
                                this.show = true
                            },
                            close() {
                                this.show = false
                            },
                            isOpen() {
                                return this.show === true
                            },
                            select(index, event) {

                                if (!this.options[index].selected) {

                                    this.options[index].selected = true;
                                    this.options[index].element = event.target;
                                    this.selected.push(index);

                                } else {
                                    this.selected.splice(this.selected.lastIndexOf(index), 1);
                                    this.options[index].selected = false
                                }
                            },
                            remove(index, option) {
                                this.options[option].selected = false;
                                this.selected.splice(index, 1);


                            },
                            loadOptions() {
                                const options = document.getElementById('select').options;
                                for (let i = 0; i < options.length; i++) {
                                    this.options.push({
                                        value: options[i].value,
                                        text: options[i].innerText,
                                        selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                                    });
                                }


                            },
                            selectedValues() {
                                return this.selected.map((option) => {
                                    return this.options[option].value;
                                })
                            }
                        }
                    }
                </script>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <label for="start_time" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Class Start Time <span class="text-red-500">*</span></label>
        <input type="time" name="start_time" id="start_time" :value="old('start_time')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    </div>

    <div class="mt-4">
        <label for="end_time" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Class End Time <span class="text-red-500">*</span></label>
        <input type="time" name="end_time" id="end_time" :value="old('end_time')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    </div>

    <div class="mt-4">
        <label for="description" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2"> Description <span class="text-grey-500">(optional)</span></label>
        <textarea cols="30" rows="5" name="description" id="description" :value="old('description')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </textarea>
    </div>

    <div class="mt-4">
        <x-label for="image">Class Image <span class="text-grey-500">(optional)</span></x-label>
        <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
    </div>

    <div class="justify-center mt-6">
        <x-success-button class="ml-3 mt-5">
            {{ __('Create') }}
        </x-success-button>
    </div>
</form>
