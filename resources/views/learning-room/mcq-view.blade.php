<x-learning-room :lesson="$lesson">

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @can('create', $lesson)
    <div class="max-w-full mx-4 sm:mx-auto sm:px-6 lg:px-8">
        <div class="sm:flex sm:space-x-4">
            <a href="https://docs.google.com/forms/u/0/" target="new" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                <div class="bg-white p-5">
                    <div class="sm:flex sm:items-start">
                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1904.8 2500" xml:space="preserve" class="sm:w-16 sm:h-16 w-10 h-10">
                                <style type="text/css">
                                    .st0 {
                                        fill: #673AB7;
                                    }

                                    .st1 {
                                        fill: #F1F1F1;
                                    }

                                    .st2 {
                                        fill: url(#SVGID_1_);
                                    }

                                    .st3 {
                                        fill: #B39DDB;
                                    }

                                    .st4 {
                                        fill: #FFFFFF;
                                        fill-opacity: 0.2;
                                    }

                                    .st5 {
                                        fill: #311B92;
                                        fill-opacity: 0.2;
                                    }

                                    .st6 {
                                        fill: #311B92;
                                        fill-opacity: 0.1;
                                    }

                                    .st7 {
                                        fill: url(#SVGID_2_);
                                    }
                                </style>
                                <g>
                                    <path class="st0" d="M1190.5,0H178.6C83.3,0,0,83.3,0,178.6v2142.9c0,95.2,83.3,178.6,178.6,178.6h1547.6
                                    c95.2,0,178.6-83.3,178.6-178.6V714.3l-416.7-297.6L1190.5,0z" />
                                    <path class="st1" d="M714.3,1845.2h714.3v-119H714.3V1845.2z M714.3,1071.4v119h714.3v-119H714.3z M607.1,1131
                                    c0,47.6-35.7,95.2-95.2,95.2s-95.2-35.7-95.2-95.2c0-59.5,35.7-95.2,95.2-95.2S607.1,1083.3,607.1,1131z M607.1,1464.3
                                    c0,47.6-35.7,95.2-95.2,95.2s-95.2-35.7-95.2-95.2c0-59.5,35.7-95.2,95.2-95.2S607.1,1416.7,607.1,1464.3z M607.1,1785.7
                                    c0,47.6-35.7,95.2-95.2,95.2s-95.2-35.7-95.2-95.2c0-59.5,35.7-95.2,95.2-95.2S607.1,1738.1,607.1,1785.7z M714.3,1547.6h714.3
                                    v-119.1H714.3L714.3,1547.6L714.3,1547.6z" />

                                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="122.5479" y1="1635.2429" x2="122.5479" y2="1634.3186" gradientTransform="matrix(666.67 0 0 -654.7559 -80127.6016 1071403.75)">
                                        <stop offset="0" style="stop-color:#311B92;stop-opacity:0.2" />
                                        <stop offset="1" style="stop-color:#311B92;stop-opacity:2.000000e-02" />
                                    </linearGradient>
                                    <path class="st2" d="M1238.1,666.7l666.7,654.8V714.3L1238.1,666.7z" />
                                    <path class="st3" d="M1190.5,0v535.7c0,95.2,83.3,178.6,178.6,178.6h535.7L1190.5,0z" />
                                    <path class="st4" d="M178.6,0C83.3,0,0,83.3,0,178.6v11.9C0,95.2,83.3,11.9,178.6,11.9h1011.9V0H178.6L178.6,0z" />
                                    <path class="st5" d="M1726.2,2488.1H178.6C83.3,2488.1,0,2404.8,0,2309.5v11.9c0,95.2,83.3,178.6,178.6,178.6h1547.6
                                    c95.2,0,178.6-83.3,178.6-178.6v-11.9C1904.8,2404.8,1821.4,2488.1,1726.2,2488.1z" />
                                    <path class="st6" d="M1369,714.3c-95.2,0-178.6-83.3-178.6-178.6v11.9c0,95.2,83.3,178.6,178.6,178.6h535.7v-11.9L1369,714.3
                                    L1369,714.3z" />

                                    <radialGradient id="SVGID_2_" cx="122.6324" cy="1634.4275" r="12.899" gradientTransform="matrix(1904.7655 0 0 -1904.75 -233525.7031 3113242.5)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0.1" />
                                        <stop offset="1" style="stop-color:#FFFFFF;stop-opacity:0" />
                                    </radialGradient>
                                    <path class="st7" d="M1190.5,0H178.6C83.3,0,0,83.3,0,178.6v2142.9c0,95.2,83.3,178.6,178.6,178.6h1547.6
                                    c95.2,0,178.6-83.3,178.6-178.6V714.3L1190.5,0z" />
                                </g>
                            </svg>
                            <h3 class="text-sm leading-6 font-medium text-gray-900">You can easily create a googleform link by clicking here</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <x-mcq-upload :lesson="$lesson" />
    @endcan
    
    <x-mcq-view :mcqs="$mcqs" />

</x-learning-room>
