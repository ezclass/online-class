<section>
    <div class="container">
        <div class="card py-3 px-5 rounded-xl flex flex-col">
            <div class="w-full">
                @if(session('success'))
                <div class="py-3 px-5 mb-4 bg-green-100 border border-green-400 text-green-600 text-sm rounded-md flex items-center justify-between shadow" role="alert">
                    <div class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 pt-1" viewBox="0 0 24 24">
                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.959 17l-4.5-4.319 1.395-1.435 3.08 2.937 7.021-7.183 1.422 1.409-8.418 8.591z" />
                        </svg>
                    </div>
                    <span class="block sm:inline">{{session('success')}}</span>
                    <button class="w-4" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                @endif

                @if(session('primary'))
                <div class="py-3 px-5 mb-4 bg-blue-100 border border-blue-400 text-blue-900 text-sm rounded-md flex items-center justify-between shadow" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 pt-1" viewBox="0 0 24 24">
                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.5 5h3l-1 10h-1l-1-10zm1.5 14.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z" />
                    </svg>
                    <span class="block sm:inline">{{session('primary')}}</span>
                    <button class="w-4" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                @endif

                @if(session('cancelled'))
                <div class="py-3 px-5 mb-4 bg-red-100 border border-red-400 text-red-900 text-sm rounded-md flex items-center justify-between shadow" role="alert">
                    <div class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 pt-1" viewBox="0 0 24 24">
                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z" />
                        </svg>
                    </div>
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
                    <div class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 pt-1" viewBox="0 0 24 24">
                            <path d="M12 1l-12 22h24l-12-22zm-1 8h2v7h-2v-7zm1 11.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z" />
                        </svg>
                    </div>
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
