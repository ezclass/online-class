<div class="bg-blue-300">
    <nav class="flex flex-col sm:flex-row py-1 px-6 border-t-2">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('safe.document', $lesson)"
                :active="request()->routeIs('safe.document', $lesson)">
                {{ __('Safe Document') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('youtube.video', $lesson)" :active="request()->routeIs('youtube.video', $lesson)">
                {{ __('Youtube Video') }}
            </x-responsive-nav-link>
        </div>
    </nav>
</div>
