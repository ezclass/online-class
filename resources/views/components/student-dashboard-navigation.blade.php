<div class="bg-blue-300">
    <nav class="flex flex-col sm:flex-row py-1 px-6 border-t-2">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('student.dashboard')" :active="request()->routeIs('student.dashboard')">
                {{ __('Time Line') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('view.ranking')" :active="request()->routeIs('view.ranking')">
                {{ __('Ranking') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('ones.ranking')" :active="request()->routeIs('ones.ranking')">
                {{ __('Ones i ranked') }}
            </x-responsive-nav-link>
        </div>
    </nav>
</div>
