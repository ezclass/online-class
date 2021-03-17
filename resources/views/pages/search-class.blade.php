<x-app-layout>
    <div class="bg-blue-100">

        <div class="hero  py-1">
            <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
                <div class="hero-wrapper grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                    <div class="hero-text col-span-6">
                        <div class=" font-bold text-4xl md:text-5xl max-w-xl text-gray-900 leading-tight">
                            <x-search-class-form :selected-grade-id="$selectedGradeId" :selected-subject-id="$selectedSubjectId" />
                        </div>
                    </div>

                    <div class="hero-image col-span-6">
                        <svg id="b9c085e1-b209-40d5-b9c5-2decca8817ec" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1177 494.25" class="w-full max-w-lg lg:max-w-full mx-auto">
                            <defs>
                                <linearGradient id="e1e32c93-0bc3-4bc5-85c6-efac924cbce5" x1="313.79" y1="660.67" x2="313.79" y2="660.43" gradientTransform="matrix(-1, 0, 0, 1, 651, 0)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="gray" stop-opacity="0.25" />
                                    <stop offset="0.54" stop-color="gray" stop-opacity="0.12" />
                                    <stop offset="1" stop-color="gray" stop-opacity="0.1" />
                                </linearGradient>
                            </defs>

                            <ellipse cx="588.5" cy="473.25" rx="588.5" ry="21" fill="#3f3d56" />
                            <path d="M1059,558.69a24.74,24.74,0,0,0,3.27-12.54c0-11.33-7-20.52-15.68-20.52s-15.67,9.19-15.67,20.52a24.74,24.74,0,0,0,3.27,12.54,25.68,25.68,0,0,0,0,25.08,25.66,25.66,0,0,0,0,25.07,25.68,25.68,0,0,0,0,25.08,24.74,24.74,0,0,0-3.27,12.54c0,11.33,7,20.52,15.67,20.52s15.68-9.19,15.68-20.52a24.74,24.74,0,0,0-3.27-12.54,25.68,25.68,0,0,0,0-25.08,25.66,25.66,0,0,0,0-25.07,25.68,25.68,0,0,0,0-25.08Z" transform="translate(-11.5 -202.87)" fill="#3f3d56" />
                            <ellipse cx="1035.05" cy="318.2" rx="15.67" ry="20.52" fill="#3f3d56" />
                            <ellipse cx="1035.05" cy="293.12" rx="15.67" ry="20.52" fill="#3f3d56" />
                            <path d="M987.88,324.37a75.44,75.44,0,0,1-5.84-8.59l41.19-6.76-44.55.33a75.22,75.22,0,0,1-1.43-59.49l59.76,31L981.9,240.35a75.08,75.08,0,1,1,124,84,74.09,74.09,0,0,1,8.56,13.7L1061,365.84l57-19.13a75.12,75.12,0,0,1-12.11,70.5,75.08,75.08,0,1,1-118,0,75.08,75.08,0,0,1,0-92.84Z" transform="translate(-11.5 -202.87)" fill="#57b894" />
                            <path d="M1122,370.79a74.75,74.75,0,0,1-16.07,46.42,75.08,75.08,0,1,1-118,0C977.82,404.44,1122,362.37,1122,370.79Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <rect x="171.5" y="7" width="834" height="456" rx="20.42" fill="#f2f2f2" />
                            <path d="M172,29.5H440a0,0,0,0,1,0,0v434a0,0,0,0,1,0,0H192.42A20.42,20.42,0,0,1,172,443.08V29.5A0,0,0,0,1,172,29.5Z" fill="#6c63ff" />
                            <path d="M1017,230.29v11.59H183V230.29a20.41,20.41,0,0,1,20.42-20.41H996.58A20.41,20.41,0,0,1,1017,230.29Z" transform="translate(-11.5 -202.87)" fill="#3f3d56" />
                            <circle cx="193" cy="23.5" r="6" fill="#6c63ff" />
                            <circle cx="208" cy="23.5" r="6" fill="#6c63ff" />
                            <circle cx="223" cy="23.5" r="6" fill="#6c63ff" />
                            <path d="M347.5,429.38" transform="translate(-11.5 -202.87)" fill="none" stroke="#f2f2f2" stroke-miterlimit="10" stroke-width="2" />
                            <path d="M333.5,428.38" transform="translate(-11.5 -202.87)" fill="none" stroke="#f2f2f2" stroke-miterlimit="10" stroke-width="2" />
                            <rect x="610.5" y="93.12" width="347" height="11" rx="1.24" fill="#6c63ff" opacity="0.3" />
                            <rect x="879.5" y="114.12" width="73" height="25" rx="1.24" fill="#6c63ff" />
                            <rect x="610.5" y="226.88" width="347" height="11" rx="1.24" fill="#6c63ff" opacity="0.3" />
                            <rect x="879.5" y="247.88" width="73" height="25" rx="1.24" fill="#6c63ff" />
                            <rect x="610.5" y="362.88" width="347" height="11" rx="1.24" fill="#6c63ff" opacity="0.3" />
                            <rect x="879.5" y="383.88" width="73" height="25" rx="1.24" fill="#6c63ff" />
                            <circle cx="535.19" cy="249.88" r="49.52" fill="#3f3d56" />
                            <path d="M590.39,478.87a1.39,1.39,0,0,1-.21.33,31,31,0,0,1-1.75,2.59,49.34,49.34,0,0,1-21.75,16.95c-.86.36-1.74.69-2.63,1a17.55,17.55,0,0,1-2.28-2.19,17.11,17.11,0,0,1-4-8.29,21,21,0,0,1-4,.38,2.68,2.68,0,0,1-.4,0c-10.3-.18-19.14-7.72-23.09-18.48l-.16-.46a37.39,37.39,0,0,1-.78-21.74v0c.05-.24.13-.48.2-.71,3.38-11.61,12.3-20.07,22.91-20.74.33,0,.66,0,1,0s.54,0,.81,0h.48C568.18,428,579,441,579.5,457.26a17.27,17.27,0,0,1,7.61,16.92A17.68,17.68,0,0,1,590.39,478.87Z" transform="translate(-11.5 -202.87)" fill="#192534" />
                            <path d="M590.18,479.2a31,31,0,0,1-1.75,2.59,16.35,16.35,0,0,0-2.67-3.55,18.83,18.83,0,0,0,.18-2.49,17.26,17.26,0,0,0-7.79-14.43c-.55-16.6-11.84-29.86-25.67-29.86-9.88,0-18.45,6.74-22.76,16.64-.11.26-.21.51-.33.78v0c-.36.86-.68,1.73-1,2.64a36.64,36.64,0,0,1,1.47-5.38L530,446c3.85-10.61,12.45-18.14,22.55-18.59.33,0,.66,0,1,0s.54,0,.81,0h.48c13.25.8,23.86,13.74,24.37,29.83a17.24,17.24,0,0,1,7.63,16.92A17.06,17.06,0,0,1,590.18,479.2Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M538,465a6.5,6.5,0,0,1-.34,3c-.59,1.37-2,2.6-1.61,4a3.07,3.07,0,0,0,2.16,1.74c4.31,1.46,9,.59,13.56.79a43.72,43.72,0,0,0,4.57.16,7.28,7.28,0,0,0,4.24-1.48,36.3,36.3,0,0,1-6.67-4.19,7.5,7.5,0,0,1-1.35-1.29,7.91,7.91,0,0,1-1.17-4.58c0-1.59,0-3.18,0-4.76-3.26,0-6.51-.05-9.77-.05-1,0-4.23-.25-4.6.88-.18.56.52,2.21.63,2.84A28.28,28.28,0,0,1,538,465Z" transform="translate(-11.5 -202.87)" fill="#a0616a" />
                            <path d="M538,465a6.5,6.5,0,0,1-.34,3c-.59,1.37-2,2.6-1.61,4a3.07,3.07,0,0,0,2.16,1.74c4.31,1.46,9,.59,13.56.79a43.72,43.72,0,0,0,4.57.16,7.28,7.28,0,0,0,4.24-1.48,36.3,36.3,0,0,1-6.67-4.19,7.5,7.5,0,0,1-1.35-1.29,7.91,7.91,0,0,1-1.17-4.58c0-1.59,0-3.18,0-4.76-3.26,0-6.51-.05-9.77-.05-1,0-4.23-.25-4.6.88-.18.56.52,2.21.63,2.84A28.28,28.28,0,0,1,538,465Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <circle cx="533.2" cy="249.2" r="11.49" fill="#a0616a" />
                            <path d="M566.49,485.4c0,.31-.06.64-.11,1a30.42,30.42,0,0,1-1.63,5.45,26.19,26.19,0,0,1-1.52,3.48c-.43.77-1,1.48-1.46,2.23l-.66,1.07a14.58,14.58,0,0,0-1.07,2.26,42.44,42.44,0,0,1-5.87,1.07,49.06,49.06,0,0,1-5.83.35c-10.45,0-21.72-2.71-29.71-8.25,0,0,1.17-.81,1-1,0-.46-.05-.91-.05-1.37a10.28,10.28,0,0,1,.57-3.48,7,7,0,0,1,1.73-2.84c1-1,2.34-1.62,3.41-2.58a10.12,10.12,0,0,0,2.79-4.85v0c.25-.8.43-1.65.6-2.47a12,12,0,0,1,.92-3.25,2.88,2.88,0,0,1,.22-.38,3.9,3.9,0,0,1,.54-.71,11.7,11.7,0,0,1,3.52-2.36c1.09-.56,2.62-1,3.38-.07l0,.07a14.09,14.09,0,0,1,.63,1.76c.61,1.26,2.31,1.42,3.69,1.39a117,117,0,0,0,14.58-1.22l2.34-.38c1.69-.28,2.87,1.2,3.82,2.64C564.78,476.67,566.86,480.94,566.49,485.4Z" transform="translate(-11.5 -202.87)" fill="#6c63ff" />
                            <path d="M531.4,486.18c-1.07.24-1.69,1.32-2.19,2.3a8.89,8.89,0,0,0-1.19,5.34,7.53,7.53,0,0,0,.23,2.17,2.88,2.88,0,0,0,1.26,1.72" transform="translate(-11.5 -202.87)" fill="none" stroke="#000" stroke-miterlimit="10" opacity="0.1" />
                            <ellipse cx="547.6" cy="443.78" rx="6.34" ry="12.85" transform="translate(-29.44 661.57) rotate(-75.66)" fill="#192534" />
                            <path d="M546.71,447.55c-6.11-1.56-10.63-5-11-8.16a3.2,3.2,0,0,0-.6,1.21c-.87,3.39,4,7.56,10.87,9.32s13.15.43,14-3a3.24,3.24,0,0,0,.08-1.16C558.23,448.28,552.7,449.08,546.71,447.55Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M566.79,493.55c0,1.74,0,3.47-.11,5.19-.86.36-1.74.69-2.63,1a36.71,36.71,0,0,1-4,1.14,42.44,42.44,0,0,1-5.87,1.07c-.35-4.14-1.14-8.13-.75-12.33v0a19.86,19.86,0,0,1,3.22-9,7.69,7.69,0,0,1,2.91-2.81,3.58,3.58,0,0,1,3.83.3,5.48,5.48,0,0,1,1.38,2.55,42.3,42.3,0,0,1,1.62,5.75c0,.21.07.44.1.66A39.63,39.63,0,0,1,566.79,493.55Z" transform="translate(-11.5 -202.87)" fill="#a0616a" />
                            <path d="M596.2,588.75a49.3,49.3,0,0,1-6,23.71c-.44.8-.9,1.61-1.42,2.41a1.39,1.39,0,0,1-.21.33,31,31,0,0,1-1.75,2.59,48.94,48.94,0,0,1-14.15,13.12l-.29.2a51.13,51.13,0,0,1-5.65,2.93c-.54.24-1.1.47-1.66.7s-1.08.44-1.64.62c-.28.12-.58.22-.87.32h0a.38.38,0,0,0-.1,0c-.61.22-1.24.41-1.86.6l-.47.11c-.56.17-1.12.31-1.68.43a42.31,42.31,0,0,1-5.88,1.07h0a48.26,48.26,0,0,1-5.79.35c-.2,0-.4,0-.6,0a45.09,45.09,0,0,1-8-.74l-.48-.08c-.49-.08-1-.18-1.47-.3h0l-.93-.21a29.29,29.29,0,0,1-2.92-.8,47.36,47.36,0,0,1-5.73-2.13l-.21-.09a48.94,48.94,0,0,1-7.79-4.43,5.33,5.33,0,0,1-.6-.41,49.51,49.51,0,1,1,78.25-40.31Z" transform="translate(-11.5 -202.87)" fill="#3f3d56" />
                            <path d="M558.67,576.82a10.51,10.51,0,0,1-21,0c0-.17,0-.34,0-.5a10.5,10.5,0,0,1,21,0C558.66,576.48,558.67,576.65,558.67,576.82Z" transform="translate(-11.5 -202.87)" fill="#192534" />
                            <path d="M558.67,576.82a10.51,10.51,0,0,1-21,0c0-.17,0-.34,0-.5a16.58,16.58,0,0,1,21,0C558.66,576.48,558.67,576.65,558.67,576.82Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <circle cx="536.66" cy="387.22" r="16.59" fill="#192534" />
                            <path d="M538.11,574.5a10.51,10.51,0,0,1,9.12-10.41,10.51,10.51,0,1,0,0,20.83A10.51,10.51,0,0,1,538.11,574.5Z" transform="translate(-11.5 -202.87)" fill="#192534" />
                            <path d="M529.44,596.83a10.51,10.51,0,0,1-1.77-13.73,11.56,11.56,0,0,0-1,1A10.51,10.51,0,1,0,542.43,598a11.13,11.13,0,0,0,.85-1.1A10.51,10.51,0,0,1,529.44,596.83Z" transform="translate(-11.5 -202.87)" fill="#192534" />
                            <path d="M539.48,611.13A9.22,9.22,0,0,0,537,612c-1.38,1-1.33,3-.92,4.63.94,3.72,3.24,7.29,6.76,8.81a16.71,16.71,0,0,0,6.82,1c2.51,0,5.35-.34,6.91-2.32a9.17,9.17,0,0,0,1.41-3.46c.77-3,1.55-6.1,1.27-9.2-1.52.13-3.22.22-4.42-.74s-1.47-2.79-2-4.31a1.13,1.13,0,0,0-.39-.62,1.27,1.27,0,0,0-.7-.1,28.29,28.29,0,0,1-4.78-.2c-1-.13-3.42-1.16-4.16-.29-.54.63-.2,2.55-.62,3.44A4.76,4.76,0,0,1,539.48,611.13Z" transform="translate(-11.5 -202.87)" fill="#ffc1c7" />
                            <path d="M539.48,611.13A9.22,9.22,0,0,0,537,612c-1.38,1-1.33,3-.92,4.63.94,3.72,3.24,7.29,6.76,8.81a16.71,16.71,0,0,0,6.82,1c2.51,0,5.35-.34,6.91-2.32a9.17,9.17,0,0,0,1.41-3.46c.77-3,1.55-6.1,1.27-9.2-1.52.13-3.22.22-4.42-.74s-1.47-2.79-2-4.31a1.13,1.13,0,0,0-.39-.62,1.27,1.27,0,0,0-.7-.1,28.29,28.29,0,0,1-4.78-.2c-1-.13-3.42-1.16-4.16-.29-.54.63-.2,2.55-.62,3.44A4.76,4.76,0,0,1,539.48,611.13Z" transform="translate(-11.5 -202.87)" opacity="0.05" />
                            <circle cx="536.43" cy="395.23" r="11.6" fill="#ffc1c7" />
                            <path d="M573.36,623.23c-.08.1-.16.22-.25.32l-.49.64a37.62,37.62,0,0,0-5.93,9.85c-.54.24-1.1.47-1.66.7s-1.08.44-1.64.62c-.28.12-.58.22-.87.32h0a.38.38,0,0,0-.1,0c-.61.22-1.24.41-1.86.6l-.47.11c-.56.17-1.12.31-1.68.43a42.31,42.31,0,0,1-5.88,1.07h0a48.26,48.26,0,0,1-5.79.35c-.2,0-.4,0-.6,0a45.09,45.09,0,0,1-8-.74l-.48-.08c-.49-.08-1-.18-1.47-.3h0l-.93-.21a29.29,29.29,0,0,1-2.92-.8,8.8,8.8,0,0,1,2.15-4.5c-2.25-2.69-5.95-3.75-8.34-6.29a8.05,8.05,0,0,1-.58-.76,3.19,3.19,0,0,1-.31-.61,1.71,1.71,0,0,1-.13-.53,4.63,4.63,0,0,1-.09-1.12c-.06-2.84.07-6.08,2.27-7.86a10.35,10.35,0,0,1,3.58-1.6,43.94,43.94,0,0,0,6.5-2.62,5.19,5.19,0,0,1,.38,1.4c.2,1.16.18,2.38.45,3.53a8.52,8.52,0,0,0,3.56,5,13.6,13.6,0,0,0,5.86,2.13c2.06.3,3.7-.77,5.64-1.5a6.54,6.54,0,0,0,2.33-1.32,5.37,5.37,0,0,0,1.31-3.65c0-1.32-.15-2.64-.07-4a1.92,1.92,0,0,1,.05-.41,1.67,1.67,0,0,1,1.14-1.57,2.13,2.13,0,0,1,1.09.2l3.74,1.43a25.93,25.93,0,0,1,4.66,2.15A12.93,12.93,0,0,1,573.36,623.23Z" transform="translate(-11.5 -202.87)" fill="#6c63ff" />
                            <path d="M538.09,637.51l-.48-.08c-.49-.08-1-.18-1.47-.3h0l-.93-.21a29.29,29.29,0,0,1-2.92-.8,47.36,47.36,0,0,1-5.73-2.13,24.76,24.76,0,0,1-1-9.42,17.36,17.36,0,0,1,.84-4c2.1,2,5.68.87,8.06,2.47A5,5,0,0,1,536,624.8a13.29,13.29,0,0,1,1.34,4.09c.15.78.29,1.57.41,2.36,0,.14,0,.25,0,.37s0,.25,0,.38c.08.56.15,1.14.18,1.71C538.09,635,538.09,636.24,538.09,637.51Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M537.61,637.43c-.49-.08-1-.18-1.47-.3h0l-.93-.21a29.29,29.29,0,0,1-2.92-.8,47.36,47.36,0,0,1-5.73-2.13l-.21-.09a25.5,25.5,0,0,1-1.27-10.47,18.7,18.7,0,0,1,.82-3.76c2.1,2,5.68.89,8.06,2.49a5.62,5.62,0,0,1,2,2.64,17.52,17.52,0,0,1,.87,3.17c.22,1.17.43,2.34.57,3.53a2.83,2.83,0,0,1,.05.5c0,.11,0,.25,0,.36s0,.28,0,.43C537.64,634.32,537.63,635.88,537.61,637.43Z" transform="translate(-11.5 -202.87)" fill="#6c63ff" />
                            <path d="M572.34,631.11a51.13,51.13,0,0,1-5.65,2.93c-.54.24-1.1.47-1.66.7s-1.08.44-1.64.62c-.28.12-.58.22-.87.32h0a.38.38,0,0,0-.1,0c-.61.22-1.24.41-1.86.6l-.47.11c0-.89,0-1.81.1-2.71.07-.71.15-1.42.25-2.13,0-.13,0-.26.05-.39a1.07,1.07,0,0,0,0-.25c.12-.68.25-1.37.38-2.05a12.53,12.53,0,0,1,1.34-4.09,5,5,0,0,1,1.55-1.72c2.38-1.6,6-.51,8-2.47a17.67,17.67,0,0,1,.81,3.58A23.33,23.33,0,0,1,572.34,631.11Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M572.63,630.91l-.29.2a51.13,51.13,0,0,1-5.65,2.93c-.54.24-1.1.47-1.66.7s-1.08.44-1.64.62c-.28.12-.58.22-.87.32h0a.38.38,0,0,0-.1,0c-.61.22-1.24.41-1.86.6,0-1.18,0-2.35.1-3.52,0-.3,0-.61.08-.91,0-.13,0-.28,0-.41s0-.22,0-.31c.15-1.08.33-2.13.55-3.19a17.52,17.52,0,0,1,.87-3.17,5.62,5.62,0,0,1,2-2.64c2.38-1.6,6-.51,8-2.49a17.11,17.11,0,0,1,.84,3.88A23.42,23.42,0,0,1,572.63,630.91Z" transform="translate(-11.5 -202.87)" fill="#6c63ff" />
                            <ellipse cx="536.2" cy="384.32" rx="13.92" ry="9.28" fill="#192534" />
                            <path d="M536.13,635.73c0,.21,0,.43,0,.66s0,.44,0,.66a.28.28,0,0,0,0,.08h0l-.93-.21a3.08,3.08,0,0,1,0-.53,6.46,6.46,0,0,1,2.23-4.89,1.48,1.48,0,0,1,.31-.25,5.91,5.91,0,0,1,1.8-1,5.37,5.37,0,0,1,1.88-.36,1.14,1.14,0,0,1,.26,0,3.77,3.77,0,0,1,.48,0l-.33,0a6.37,6.37,0,0,0-4,2,2.11,2.11,0,0,0-.31.36A6.4,6.4,0,0,0,536.13,635.73Z" transform="translate(-11.5 -202.87)" opacity="0.05" />
                            <path d="M546.31,636.39a8.1,8.1,0,0,1-.22,1.86,45.09,45.09,0,0,1-8-.74l-.48-.08c-.49-.08-1-.18-1.47-.3h0v-.08c0-.22,0-.43,0-.66s0-.45,0-.66a7.23,7.23,0,0,1,1.32-3.73,2.24,2.24,0,0,1,.31-.38,4.6,4.6,0,0,1,1.75-1.34,3.9,3.9,0,0,1,1.68-.38.68.68,0,0,1,.2,0,2.83,2.83,0,0,1,.41,0C544.34,630.33,546.31,633.07,546.31,636.39Z" transform="translate(-11.5 -202.87)" fill="#6c63ff" />
                            <path d="M563.39,635.36c-.28.12-.58.22-.87.32h0a6.32,6.32,0,0,0-1.78-3.8l-.3-.3a6.57,6.57,0,0,0-3.58-1.63l-.33,0a3.62,3.62,0,0,1,.46,0,1.27,1.27,0,0,1,.27,0,5.87,5.87,0,0,1,1.89.36,6.44,6.44,0,0,1,1.37.66,1.17,1.17,0,0,1,.3.22A6.37,6.37,0,0,1,563.39,635.36Z" transform="translate(-11.5 -202.87)" opacity="0.05" />
                            <path d="M562.52,635.68h0a.38.38,0,0,0-.1,0c-.61.22-1.24.41-1.86.6l-.47.11c-.56.17-1.12.31-1.68.43a42.31,42.31,0,0,1-5.88,1.07h0a7.63,7.63,0,0,1-.15-1.53c0-3.32,2-6.06,4.51-6.44a2.6,2.6,0,0,1,.4,0,.62.62,0,0,1,.19,0,3.92,3.92,0,0,1,1.7.38,4.55,4.55,0,0,1,1.34.91,1.92,1.92,0,0,1,.3.28A7.18,7.18,0,0,1,562.52,635.68Z" transform="translate(-11.5 -202.87)" fill="#6c63ff" />
                            <path d="M547.7,595.55c-7.46,0-13.55-3.9-13.91-8.81,0,.15,0,.3,0,.46,0,5.13,6.24,9.28,13.93,9.28s13.92-4.15,13.92-9.28c0-.16,0-.31,0-.46C561.24,591.65,555.15,595.55,547.7,595.55Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M497.17,319a49.4,49.4,0,0,0,6,23.7c.45.81.91,1.62,1.42,2.41a1.45,1.45,0,0,0,.22.33A29.4,29.4,0,0,0,506.6,348a47.47,47.47,0,0,0,7.14,7.89,18.86,18.86,0,0,0,1.56,1.34,44.44,44.44,0,0,0,5.44,3.89l.3.2a53.78,53.78,0,0,0,5.64,2.94l1.67.69c.55.23,1.07.45,1.64.63.28.11.57.21.87.31h0s0,0,0,0H531q.91.33,1.86.6l.46.11c.56.17,1.13.32,1.69.43.76.2,1.51.37,2.29.51,1.17.23,2.38.43,3.58.57h0a48.14,48.14,0,0,0,5.79.34h.59a46.07,46.07,0,0,0,8-.75,3.7,3.7,0,0,0,.48-.08c.49-.08,1-.18,1.47-.3h0c.32-.06.61-.13.93-.21,1-.22,2-.48,2.92-.79.59-.19,1.17-.37,1.75-.57,1.17-.41,2.34-.85,3.46-1.35a3.89,3.89,0,0,0,.51-.21l.22-.1q2.22-1,4.32-2.23c1.19-.68,2.35-1.42,3.47-2.2l.07,0a4.06,4.06,0,0,0,.52-.36A49.51,49.51,0,1,0,497.17,319Z" transform="translate(-11.5 -202.87)" fill="#3f3d56" />
                            <path d="M557.68,338.62a4.6,4.6,0,0,1,1.45,2.45c-1.44.38-2.91-.33-4.25-1a54.22,54.22,0,0,0-13.07-4.21,2,2,0,0,1-1-.38,1.7,1.7,0,0,1,.06-2.1c.5-.52,1.44-.45,2.12-.48a19.31,19.31,0,0,1,14.69,5.68Z" transform="translate(-11.5 -202.87)" fill="#6c63ff" />
                            <path d="M543.05,334.64a6,6,0,0,1-3.31,3.33c-.81.29-1.68.34-2.5.57a2.77,2.77,0,0,0-1.94,1.53,3.28,3.28,0,0,0-.15,1.08c-.13,3.45-.23,7,1.15,10.2,1.19,2.74,3.37,4.9,5.53,6.95,2.52,2.41,5.19,4.85,8.51,5.93,1.94.63,4.23.7,5.84-.55a8.67,8.67,0,0,0,1.63-1.89,22.86,22.86,0,0,0,2.8-4.77c1.37-3.52.91-7.46.43-11.21a.9.9,0,0,0-.24-.6.94.94,0,0,0-.7-.12,4.12,4.12,0,0,1-4.17-2.4,6.26,6.26,0,0,1-.23-2.2l.07-4.28a3.63,3.63,0,0,0-.16-1.36,3.42,3.42,0,0,0-1.79-1.55,44.23,44.23,0,0,0-7.28-2.87c-1.1-.32-1.94-.86-2.43.32S543.62,333.4,543.05,334.64Z" transform="translate(-11.5 -202.87)" fill="#fbbebe" />
                            <path d="M543.05,334.64a6,6,0,0,1-3.31,3.33c-.81.29-1.68.34-2.5.57a2.77,2.77,0,0,0-1.94,1.53,3.28,3.28,0,0,0-.15,1.08c-.13,3.45-.23,7,1.15,10.2,1.19,2.74,3.37,4.9,5.53,6.95,2.52,2.41,5.19,4.85,8.51,5.93,1.94.63,4.23.7,5.84-.55a8.67,8.67,0,0,0,1.63-1.89,22.86,22.86,0,0,0,2.8-4.77c1.37-3.52.91-7.46.43-11.21a.9.9,0,0,0-.24-.6.94.94,0,0,0-.7-.12,4.12,4.12,0,0,1-4.17-2.4,6.26,6.26,0,0,1-.23-2.2l.07-4.28a3.63,3.63,0,0,0-.16-1.36,3.42,3.42,0,0,0-1.79-1.55,44.23,44.23,0,0,0-7.28-2.87c-1.1-.32-1.94-.86-2.43.32S543.62,333.4,543.05,334.64Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <circle cx="543.13" cy="122.18" r="13.06" fill="#fbbebe" />
                            <path d="M537.28,367.6c1.17.23,2.38.43,3.58.57h0a48.14,48.14,0,0,0,5.79.34h.59a46.07,46.07,0,0,0,8-.75,3.7,3.7,0,0,0,.48-.08c.49-.08,1-.18,1.47-.3h0c.32-.06.61-.13.93-.21,1-.22,2-.48,2.92-.79.59-.19,1.17-.37,1.75-.57,1.17-.41,2.34-.85,3.46-1.35a24.5,24.5,0,0,1-.71-2.71,29.92,29.92,0,0,1-.38-5.92c0-1.59.07-3.17,0-4.75a11.69,11.69,0,0,0-.55-3.78,4.83,4.83,0,0,0-2.44-2.83c-1.49-.66-3.73-1-5.2-.26a3.56,3.56,0,0,0-.48.31,2.49,2.49,0,0,0-.72,1c-.48,1.2-1,2.41-1.46,3.61a11.44,11.44,0,0,1-1.17,2.38,5.9,5.9,0,0,1-6.47,2.13,3.83,3.83,0,0,1-.43-.17c-2-.81-3.83-2.56-5.92-2.09a3.94,3.94,0,0,0-2.61,2.26,1,1,0,0,0-.07.18,10.15,10.15,0,0,0-.72,3.28A43.74,43.74,0,0,0,537.28,367.6Z" transform="translate(-11.5 -202.87)" fill="#f2f2f2" />
                            <path d="M513.74,355.92a18.86,18.86,0,0,0,1.56,1.34,44.44,44.44,0,0,0,5.44,3.89l.3.2a53.78,53.78,0,0,0,5.64,2.94l1.67.69c.55.23,1.07.45,1.64.63.28.11.57.21.87.31h0s0,0,0,0H531q.91.33,1.86.6l.46.11c.56.17,1.13.32,1.69.43.76.2,1.51.37,2.29.51,1.17.23,2.38.43,3.58.57h0a48.14,48.14,0,0,0,5.79.34h.59a46.07,46.07,0,0,0,8-.75,3.7,3.7,0,0,0,.48-.08c.49-.08,1-.18,1.47-.3h0c.32-.06.61-.13.93-.21,1-.22,2-.48,2.92-.79.59-.19,1.17-.37,1.75-.57,1.17-.41,2.34-.85,3.46-1.35a3.89,3.89,0,0,0,.51-.21l.22-.1q2.22-1,4.32-2.23a74.86,74.86,0,0,0,2.5-8,1,1,0,0,1,0-.16c-1.56-2.77-2.94-5.65-4.49-8.42a6.43,6.43,0,0,0-5.15-3.88,12.6,12.6,0,0,0-3.35-.62,12.61,12.61,0,0,1-1.92-.33c-1.3-.29-2.74-.57-3.22,0v0a.17.17,0,0,0-.07.13,2.74,2.74,0,0,0,.23,2c.22.63.51,1.29.66,1.83a2.75,2.75,0,0,1,.15.8,27.27,27.27,0,0,1-.12,3.51c-.28,1.7-1.22,3.2-1.66,4.85-.2.78-.3,1.59-.43,2.38a25.62,25.62,0,0,1-1.39,5.22,3.57,3.57,0,0,1-.51,1c-.82,1-2.18.62-3.47.43-.94-.8-.89-2.22-1-3.42a18,18,0,0,0-1.82-5.78l-.34-.72c-1-2.07-2-4.13-2.94-6.21-1.21-2.58-2.46-5.53-1.46-8.2.29-.8.76-1.51,1.08-2.28a2.48,2.48,0,0,0,.13-.35,3.33,3.33,0,0,0,.15-.91,2,2,0,0,0-.46-1.55.8.8,0,0,0-.2-.21.32.32,0,0,0-.12-.08,2.38,2.38,0,0,0-2.18-.1,9.13,9.13,0,0,0-1.15.51A55,55,0,0,0,533.1,337a2.84,2.84,0,0,0-1.18,1.37,10.24,10.24,0,0,1-.19,1.13c-.28.71-1.13.92-1.86,1.08a22.77,22.77,0,0,0-14.52,10.67,11.72,11.72,0,0,0-1.24,2.75A11.42,11.42,0,0,0,513.74,355.92Z" transform="translate(-11.5 -202.87)" fill="#6c63ff" />
                            <path d="M560.38,317.68c-1.77,1.81-4.6,1.88-7.13,1.84l.08-1-3.55,1.27a9.41,9.41,0,0,0,2.33-2.5,1.59,1.59,0,0,0-1.73-.11,3.6,3.6,0,0,0-1.29,1.28,11.66,11.66,0,0,0-1.29,10.38,2.3,2.3,0,0,1-2.29-.15,4,4,0,0,1-1.47-1.86c-.21-.48-.43-1-.93-1.19a1,1,0,0,0-1.12.5,2.12,2.12,0,0,0-.24,1.27c.07,1,.82,2,1,3s1.66,1.8.88,2.47a11.41,11.41,0,0,1-2.84.67,1.23,1.23,0,0,1-.82-.81c-.79-1.74-.51-3.77-1-5.62a13.81,13.81,0,0,0-2.06-4.09,5.72,5.72,0,0,0-.78-1.05,2.63,2.63,0,0,1-.76-.87c-.13-.36.12-.89.5-.82a15.62,15.62,0,0,0-2-1.64c.7-.88,1.38-1.78,2-2.68.23-.32.47-.71.3-1.06a1.07,1.07,0,0,0-.4-.39L534,313.32c0-.84,1.67-.53,1.93-1.32a1.08,1.08,0,0,0,0-.64l-.62-2.26,2.36,1.07a1.6,1.6,0,0,0,.9.21c.62-.09.92-.82,1-1.45a4.12,4.12,0,0,1,.24-1.86c1.07,0,2.14,0,3.2,0a2.09,2.09,0,0,0-.39-1.51l7.88-.44a11,11,0,0,1,4,.28,3.14,3.14,0,0,0,1.33.3c.45,0,.91-.47.78-.91a14.31,14.31,0,0,1,3.21,2.47,3.09,3.09,0,0,0,.91.75,1,1,0,0,0,1.11-.13c.22-.23.32-.64.64-.66s.36.16.48.31a7.81,7.81,0,0,1,1.09,1.9,6.82,6.82,0,0,0,1.65-.44,1.78,1.78,0,0,0-.3,2c.26.67.74,1.24,1.06,1.88a7.8,7.8,0,0,1,.63,2.18c.16.94.16,2.13-.67,2.59a2.24,2.24,0,0,1-2.3-.52C562.21,315.76,561.86,316.16,560.38,317.68Z" transform="translate(-11.5 -202.87)" fill="#192534" />
                            <path d="M515.3,357.26a44.44,44.44,0,0,0,5.44,3.89l.3.2a53.78,53.78,0,0,0,5.64,2.94l1.67.69c.55.23,1.07.45,1.64.63.28.11.57.21.87.31h0s0,0,0,0c-.35-1-.58-2-.89-3a16.94,16.94,0,0,0-4.29-7.06c-1.72-1.72-4.46-4.23-7-2.71a8,8,0,0,0-2,1.93,8.94,8.94,0,0,0-1.24,1.83C515.39,357,515.35,357.12,515.3,357.26Z" transform="translate(-11.5 -202.87)" fill="#6c63ff" />
                            <path d="M562.85,365.8c1.17-.41,2.34-.85,3.46-1.35a3.89,3.89,0,0,0,.51-.21l.22-.1q2.22-1,4.32-2.23c1.19-.68,2.35-1.42,3.47-2.2l.07,0a20.82,20.82,0,0,1,0-3.35,2.63,2.63,0,0,0-.07-1.12,2.67,2.67,0,0,0-.56-.77,4.6,4.6,0,0,1-.41-.47c-1.13-1.27-2.05-2.64-4-2.44s-3.63,1.88-4.45,3.75a3.43,3.43,0,0,0-.22.56,38.8,38.8,0,0,0-1.3,5.31c-.26,1.11-.59,2.18-.83,3.29C563,364.88,562.91,365.34,562.85,365.8Z" transform="translate(-11.5 -202.87)" fill="#6c63ff" />
                            <path d="M337.43,660.43h0l-.44.24Z" transform="translate(-11.5 -202.87)" fill="url(#e1e32c93-0bc3-4bc5-85c6-efac924cbce5)" />
                            <path d="M276,606.42c-3.86,11.12.65,29.17,2.74,37.22a112,112,0,0,1,2.74,17.72,37.34,37.34,0,0,0,14.18-.32l-3.38-16.59c2.41-9.83,0-36.09,0-36.09s5.47-10.15,6-25.62c.47-15.22,4.22-20.14,4.34-20.3h0c7.73,4,17.56,47.21,17.56,47.21-.81,10.47.16,26.58,3.38,35.28a43.76,43.76,0,0,1,2.42,17.24,5.31,5.31,0,0,0,4.38.84c4.6-.74,10.12-4.71,10.12-4.71s-1.77-47-3.06-48.81,0-11.92,0-11.92l-2.1-16.44s.32-27.87-2.74-32.7c-2.64-4.18-3.25-11.51-3.37-13.44,0-.3,0-.47,0-.47l-4.66-5.59s-45.11-3.38-48.5,0c-.83.83-1.34,2.72-1.65,5.1-.93,7.31.14,19.23.14,19.23s1.35,8.86,3.29,17.88a39.27,39.27,0,0,1,0,16.44A49.15,49.15,0,0,1,276,606.42Z" transform="translate(-11.5 -202.87)" fill="#575a89" />
                            <path d="M278.78,677.07c2,2.66,13.86,1.53,15.87.7,1.23-.5,1.14-2.82.81-5.2-.21-1.52-.52-3.07-.65-4.2-.32-2.9,1-8.78,1-8.78s-2.66,2.82-3.3,0a3.08,3.08,0,0,0-2.3-2.18,6,6,0,0,0-4.18.26c-2.1.9-5.59,2.84-5,5.46.88,3.7-2.26,9-2.26,9a4,4,0,0,0,0,5Z" transform="translate(-11.5 -202.87)" fill="#cbceda" />
                            <path d="M278.78,677.07c2,2.66,13.86,1.53,15.87.7,1.23-.5,1.14-2.82.81-5.2-1.27.59-3.44,1.09-7,.75a21.39,21.39,0,0,0-2.53-.08,57.55,57.55,0,0,1-7.69-.15A3.84,3.84,0,0,0,278.78,677.07Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M320.11,609.65c-.81,10.47.16,26.58,3.38,35.28a43.76,43.76,0,0,1,2.42,17.24,5.31,5.31,0,0,0,4.38.84c-1-6.79-5.11-36.07-7.77-59.2a96.89,96.89,0,0,0-17.15-44.47l-2.82,3.1C310.28,566.47,320.11,609.65,320.11,609.65Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M283.62,440.32l2,9.67,9.64,16.19,11.88-5.07s16.15-16.92,6-19.34a8.77,8.77,0,0,1-3.37-1.5,7,7,0,0,1-2.63-5.83,17.84,17.84,0,0,1,1.65-6.93L288,421a33.86,33.86,0,0,1,1.49,8.42c.16,5.66-1.95,8.45-3.67,9.78A6.27,6.27,0,0,1,283.62,440.32Z" transform="translate(-11.5 -202.87)" fill="#fbbebe" />
                            <path d="M288,421a33.86,33.86,0,0,1,1.49,8.42,13.28,13.28,0,0,0,1.21,1.28A16.35,16.35,0,0,0,302,435.25a16.13,16.13,0,0,0,5.08-.81,17.84,17.84,0,0,1,1.65-6.93Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M285.58,418.33A16.44,16.44,0,1,0,302,401.9,16.35,16.35,0,0,0,285.58,418.33Z" transform="translate(-11.5 -202.87)" fill="#fbbebe" />
                            <path d="M283.62,440.32l2,9.67,9.64,16.19,11.88-5.07s16.15-16.92,6-19.34a8.77,8.77,0,0,1-3.37-1.5c1.83,5-5.73,15.52-5.73,15.52-.88,1.29-2.9.48-2.9.48-4.88-.74-13.85-14.75-15.31-17.08A6.27,6.27,0,0,1,283.62,440.32Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M274.31,534c2.86.65,18.69,4.16,24.69,3.28,6.61-1,19.45-1.61,19.45-1.61s8.18.44,10.69-.71c0-.3,0-.47,0-.47l-4.66-5.59s-45.11-3.38-48.5,0C275.13,529.76,274.62,531.65,274.31,534Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M304,456.27s8.5-11.77,5.29-16.36l14.36,5.89s8.64-1.05,11.76,11.85a22.52,22.52,0,0,1,.54,6.55,19.47,19.47,0,0,0,2.36,9.79c3.55,7.09,2.74,23.36-4.51,25s-9.83.8-9.83.8,1,29.48,5.16,32.87-10.68,2.58-10.68,2.58-12.84.64-19.45,1.61-25.13-3.39-25.13-3.39,2.74-12.4,3.7-20.3,3.23-24.7,3.23-24.7l-16.44-22.26s-2.9-13.45,7.25-19.41,14-7.43,14-7.43,10.2,16.61,15.52,17.42C301.1,456.76,303.12,457.57,304,456.27Z" transform="translate(-11.5 -202.87)" fill="#3f3d56" />
                            <path d="M322.85,460.94s.16,5.32-.81,7.42-4.51,13.69-4.51,13.69h8.05s-4.35-4.67-4-6.93S322.85,460.94,322.85,460.94Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M299,501.06s17.79-4.35,19.45-8.06,6.23-12,6.23-12l-1.88-2.53-8.65,6.79s-10.31,8.22-15.15,9S299,501.06,299,501.06Z" transform="translate(-11.5 -202.87)" fill="#fbbebe" />
                            <path d="M299,501.06s17.79-4.35,19.45-8.06,6.23-12,6.23-12l-1.88-2.53-8.65,6.79s-10.31,8.22-15.15,9S299,501.06,299,501.06Z" transform="translate(-11.5 -202.87)" opacity="0.05" />
                            <path d="M283.62,480.12v9.65h1.55a45.12,45.12,0,0,1,21.9,5.67l2.91,1.61.78.44,5-11.25-4.67-4.19-.24,0c-1.15.11-6.09.53-8.18-.18s-4.46-2.82-10.33-1.32c-2.88.74-5.35,4-8.15,3Z" transform="translate(-11.5 -202.87)" fill="#fbbebe" />
                            <path d="M268.07,462.56l-3.22,3.62V475s2.74,27.71,11.44,30.77S300.52,504,300.52,504s4-10.63,2.13-11.28-16.58-4.53-16.58-4.53.2-16.25-3-21.08c0,0,2.1-15.15-5.15-15.47S268.07,462.56,268.07,462.56Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M267.59,462.56l-3.23,3.62V475s2.74,27.71,11.44,30.77S300,504,300,504s4-10.63,2.14-11.28-16.59-4.53-16.59-4.53.21-16.25-3-21.08c0,0,2.09-15.15-5.16-15.47S267.59,462.56,267.59,462.56Z" transform="translate(-11.5 -202.87)" fill="#3f3d56" />
                            <path d="M290.09,425.31a6.37,6.37,0,0,1,.37-3.13A2.43,2.43,0,0,1,293,420.7c1.38.32,2,2.12,3.33,2.55a2.63,2.63,0,0,0,2.92-1.51,7.58,7.58,0,0,0,.56-3.51c0-1.34,0-2.69,0-4s.05-3.05.95-4.2c1.13-1.43,3.77-2.06,5.53-2a4.63,4.63,0,0,1,3.15,1.27,4.1,4.1,0,0,0,3.32,1.18,2.88,2.88,0,0,0,2.32-2,.09.09,0,0,1,0-.05,16.43,16.43,0,1,0-24.44,21.81A42.26,42.26,0,0,1,290.09,425.31Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M312.78,410a2.9,2.9,0,0,0,2.32-2c.13-.52.1-1.08.25-1.59.38-1.27,1.73-1.93,2.63-2.89,1.82-1.93,1.7-5.1.41-7.41-1-1.87-3-3.44-5.15-3.08-1.3.23-2.43,1.16-3.75,1.24a7.84,7.84,0,0,1-3.59-1.16,13.53,13.53,0,0,0-8.91-.79,5.11,5.11,0,0,0-2.45,1.24,20.09,20.09,0,0,0-1.3,1.83c-1.51,1.92-4.2,2.29-6.59,2.72s-5.1,1.38-5.89,3.69c-.52,1.52,0,3.18.28,4.77a1.37,1.37,0,0,1-.06,1c-.37.62-1.31.36-2,.51-1.35.28-1.7,2-1.75,3.42-.06,1.59-.1,3.18-.13,4.77a4.67,4.67,0,0,0,1.51,4l5.32,6.39c2.36,2.84,4.86,6.14,4.39,9.8,1.11.5,2.44-.47,2.81-1.64a7.24,7.24,0,0,0-.18-3.63,44.22,44.22,0,0,1-.84-6.29,6.37,6.37,0,0,1,.37-3.13,2.42,2.42,0,0,1,2.55-1.48c1.38.32,2,2.11,3.33,2.55a2.64,2.64,0,0,0,2.92-1.51,7.58,7.58,0,0,0,.56-3.51v-4c0-1.46.05-3,.95-4.2,1.13-1.43,3.77-2.05,5.53-2a4.73,4.73,0,0,1,3.15,1.27A4.07,4.07,0,0,0,312.78,410Z" transform="translate(-11.5 -202.87)" fill="#3f3d56" />
                            <path d="M309.07,460.54l-5,20.73S300.05,481.24,309.07,460.54Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M291.83,457.08s6.61,10.82,4,22l-1.23.09S296.83,474,291.83,457.08Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M287.64,518.3s-8.11-2.68-8.7,3.54C278.94,521.84,280.47,517.57,287.64,518.3Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M311.09,482.53s1.61,11.28-1.29,15.79A35.21,35.21,0,0,0,324,500.25l1-17.72Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M310,497.05l.78.44,5-11.25-4.67-4.19h-.25v0C310.92,482.59,312.22,492.28,310,497.05Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M311.09,482.05s1.61,11.28-1.29,15.79A35.43,35.43,0,0,0,324,499.77l5.64-17.72Z" transform="translate(-11.5 -202.87)" fill="#3f3d56" />
                            <path d="M325,670.21a3.64,3.64,0,0,0,3.13,3.19c4.37.66,14.91,2.32,17.57,3.59,3.39,1.61,16.76.48,17.4-1.13a2.53,2.53,0,0,0-.23-1.93,5.13,5.13,0,0,0-2.16-2.33,6.5,6.5,0,0,0-1-.43c-2.52-.84-7.27-2.62-8.56-4.49,0,0-5.93-5.19-7.62-8a3.87,3.87,0,0,0-3.1-1.93c-1.41-.06-3,.65-3.62,3.74,0,0-7.73,4.41-9.82.54,0,0-.33,5.94-1.61,7.57h0A2.17,2.17,0,0,0,325,670.21Z" transform="translate(-11.5 -202.87)" fill="#cbceda" />
                            <path d="M325,670.21a3.64,3.64,0,0,0,3.13,3.19c4.37.66,14.91,2.32,17.57,3.59,3.39,1.61,16.76.48,17.4-1.13a2.53,2.53,0,0,0-.23-1.93,5.13,5.13,0,0,0-2.16-2.33c-2.18,1.45-7,2.87-17.66,1.2-10.16-1.58-15.19-3.14-17.64-4.19h0A2.17,2.17,0,0,0,325,670.21Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <g opacity="0.1">
                                <path d="M281.06,406.76s0-.05,0-.07a15.41,15.41,0,0,1-.49-3.66A22.68,22.68,0,0,0,281,406,1.81,1.81,0,0,1,281.06,406.76Z" transform="translate(-11.5 -202.87)" />
                                <path d="M290.46,421.84a4.88,4.88,0,0,0-.4,1.85,5.57,5.57,0,0,1,.4-2.57,2.43,2.43,0,0,1,2.55-1.48c1.38.32,2,2.12,3.33,2.55a2.63,2.63,0,0,0,2.92-1.51,7.56,7.56,0,0,0,.56-3.51c0-1.34,0-2.69,0-4s.05-3.05.95-4.2c1.13-1.43,3.77-2.06,5.53-2a4.63,4.63,0,0,1,3.15,1.27,4.1,4.1,0,0,0,3.32,1.18,2.87,2.87,0,0,0,2.32-2c.13-.52.1-1.08.25-1.59.38-1.27,1.73-1.93,2.63-2.89a5.2,5.2,0,0,0,1.36-3.4,5.46,5.46,0,0,1-1.36,4.13c-.9,1-2.25,1.62-2.63,2.88-.15.52-.12,1.07-.25,1.59a2.88,2.88,0,0,1-2.32,2,4.07,4.07,0,0,1-3.32-1.19,4.68,4.68,0,0,0-3.15-1.27c-1.76-.06-4.4.57-5.53,2-.9,1.15-.94,2.74-.95,4.2s0,2.69,0,4a7.54,7.54,0,0,1-.56,3.5,2.61,2.61,0,0,1-2.92,1.51c-1.35-.43-1.95-2.22-3.33-2.54A2.41,2.41,0,0,0,290.46,421.84Z" transform="translate(-11.5 -202.87)" />
                                <path d="M277.22,417.41a6.29,6.29,0,0,0,1.37,2.22l5.32,6.39c2.24,2.69,4.61,5.8,4.43,9.24-.16-3.15-2.35-6-4.43-8.52l-5.32-6.39a4.67,4.67,0,0,1-1.51-4A4.07,4.07,0,0,0,277.22,417.41Z" transform="translate(-11.5 -202.87)" />
                                <path d="M291.11,434.18a3.7,3.7,0,0,0,.16-.87,4.47,4.47,0,0,1-.16,1.59c-.37,1.17-1.69,2.14-2.81,1.63a5.49,5.49,0,0,0,.05-.7A2.29,2.29,0,0,0,291.11,434.18Z" transform="translate(-11.5 -202.87)" />
                            </g>
                            <path d="M344.64,660.15s-1.68,3-7.78.35" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M293.05,660.86s-5.26,6.2-11.89,2" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M277.74,587.58s3.71,2.32,3.84,3.65-1.92-1-1.92-1Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M276.27,605.39a7.74,7.74,0,0,0,4.58,1.79c2.78.12,2.55,3.74.73,2.66A45.56,45.56,0,0,1,276.27,605.39Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M275.56,607.71s1.79,8.77,3.24,7.08" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M94.79,662.63c3-5.51-.41-12.26-4.29-17.17s-8.61-10-8.51-16.29c.15-9,9.7-14.32,17.33-19.09a84,84,0,0,0,15.56-12.51,23,23,0,0,0,4.78-6.4c1.58-3.52,1.53-7.52,1.43-11.37q-.5-19.27-1.9-38.49" transform="translate(-11.5 -202.87)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="4" />
                            <path d="M133.7,540.61a14,14,0,0,0-7-11.5l-3.14,6.21.09-7.52a14,14,0,1,0,10.06,12.81Z" transform="translate(-11.5 -202.87)" fill="#57b894" />
                            <path d="M108.67,635.6a14,14,0,1,1,.68-11.3l-8.77,7.13,9.65-2.23A14,14,0,0,1,108.67,635.6Z" transform="translate(-11.5 -202.87)" fill="#57b894" />
                            <path d="M101.74,608.35a14,14,0,0,1-4.45-27.53l-.08,5.78,3.18-6.29h0a14,14,0,0,1,14.67,13.36,13.84,13.84,0,0,1-.6,4.79A14,14,0,0,1,101.74,608.35Z" transform="translate(-11.5 -202.87)" fill="#57b894" />
                            <path d="M135.81,585.68a14,14,0,1,1,6.2-26.27l-2.48,6.8,5.11-4.9a14,14,0,0,1,4.53,9.69,13.79,13.79,0,0,1-.35,3.87A14.05,14.05,0,0,1,135.81,585.68Z" transform="translate(-11.5 -202.87)" fill="#57b894" />
                            <path d="M131.81,544.35c-3.24.35-6.39,1.36-9.64,1.56s-6.82-.58-8.88-3.1c-1.1-1.36-1.66-3.09-2.59-4.57a10,10,0,0,0-3.54-3.33,14,14,0,1,0,26.24,9.32Q132.61,544.26,131.81,544.35Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M135.81,585.68a14,14,0,0,1-13.35-20,10.37,10.37,0,0,1,2.82,2.82c1,1.51,1.61,3.26,2.78,4.64,2.19,2.57,5.92,3.41,9.31,3.26s6.66-1.12,10-1.43c.47,0,.94-.07,1.42-.08A14.05,14.05,0,0,1,135.81,585.68Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M101.74,608.35a14,14,0,0,1-13.47-19.76,11.36,11.36,0,0,1,3,2.85c1.09,1.54,1.77,3.31,3.05,4.73,2.37,2.64,6.35,3.57,9.93,3.48s6.83-.92,10.28-1.19A14,14,0,0,1,101.74,608.35Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M108.67,635.6a14,14,0,0,1-25.59-11.45,13.59,13.59,0,0,1,3.08,2.75c1.34,1.62,2.22,3.47,3.76,5,2.87,2.82,7.5,4,11.63,4.09A60,60,0,0,0,108.67,635.6Z" transform="translate(-11.5 -202.87)" opacity="0.1" />
                            <path d="M73.62,656.29S84.7,656,88,653.57s17-5.21,17.86-1.4,16.65,19,4.14,19.06-29.05-2-32.39-4S73.62,656.29,73.62,656.29Z" transform="translate(-11.5 -202.87)" fill="#656380" />
                            <path d="M110.27,669.9c-12.51.11-29.06-1.94-32.39-4-2.54-1.55-3.55-7.1-3.89-9.65h-.37s.7,8.93,4,11,19.89,4.08,32.39,4c3.61,0,4.86-1.31,4.79-3.21C114.33,669.17,113,669.88,110.27,669.9Z" transform="translate(-11.5 -202.87)" opacity="0.2" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <x-alart />

        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
            @forelse($programs as $program)
            <x-program-card :program="$program" />
            @empty
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                <strong class="font-bold">oops!</strong>
                <span class="block sm:inline">Still no class. Coming Soon!</span>
            </div>
            @endforelse
        </div>

        <div class="mt-10 mb-10">
            {{ $programs->links() }}
        </div>

    </div>
</x-app-layout>
