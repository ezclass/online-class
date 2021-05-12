<div class="bg-white mt-1">
    <nav class="flex flex-col sm:flex-row py-1 px-6 border-t-2 border-green-200">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('teacher.dashboard')" :active="request()->routeIs('teacher.dashboard')">
                {{ __('Time Line') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('bank.detail')" :active="request()->routeIs('bank.detail')">
                {{ __('Bank details') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('create.program.viwe')" :active="request()->routeIs('create.program.viwe')">
                {{ __('Create Class') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('program.view.teacher')" :active="request()->routeIs('program.view.teacher')">
                {{ __('My Classes') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('public.dashboard',Auth::user())" :active="request()->routeIs('public.dashboard')">
                {{ __('My Public Dashboard') }}
            </x-responsive-nav-link>
        </div>
    </nav>
</div>
