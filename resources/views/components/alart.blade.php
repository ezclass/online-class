<section>
    <div class="container">
        <div class="card py-3 px-5 rounded-xl flex flex-col">
            <div class="w-full">
                @if(session('success'))
                <div class="py-3 px-5 mb-4 bg-green-100 border border-green-400 text-green-900 text-sm rounded-md flex items-center justify-between shadow" role="alert">
                    <span class="block sm:inline">{{session('success')}}</span>
                    <button class="w-4" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                @endif

                @if(session('wait'))
                <div class="py-3 px-5 mb-4 bg-blue-100 border border-blue-400 text-blue-900 text-sm rounded-md flex items-center justify-between shadow" role="alert">
                    <span class="block sm:inline">{{session('wait')}}</span>
                    <button class="w-4" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                @endif

                @if(session('cancelled'))
                <div class="py-3 px-5 mb-4 bg-red-100 border border-red-400 text-red-900 text-sm rounded-md flex items-center justify-between shadow" role="alert">
                    <span class="block sm:inline">{{session('cancelled')}}</span>
                    <button class="w-4" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                @endif

                @if(session('warning'))
                <div class="py-3 px-5 mb-4 bg-yellow-100 border border-yellow-400 text-yellow-900 text-sm rounded-md flex items-center justify-between shadow" role="alert">
                    <span class="block sm:inline">{{session('warning')}}</span>
                    <button class="w-4" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                @endif

            </div>
        </div>
    </div>
</section>
