@props(['errors'])
@if ($errors->any())
<div class="container">
    <div class="card py-3 px-5 rounded-xl flex flex-col">
        <div class="w-full">
            @foreach ($errors->all() as $error)
            <div class="py-3 px-5 mb-4 bg-red-100 text-red-900 text-sm rounded-md border border-red-200 flex items-center justify-between" role="alert">
                <span>{{$error}}</span>
                <button class="w-4" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
