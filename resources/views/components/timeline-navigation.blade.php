<div class="mt-1">
    <nav class="flex justify-center flex-row sm:flex-row py-1 px-6">
        <div class="pt-2 pb-3 space-y-1">
            <x-timeline-nav-link :href="route('teacher.dashboard')" :active="request()->routeIs('teacher.dashboard')">
                {{ __('Enrollment Request') }}
            </x-timeline-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-timeline-nav-link :href="route('cash.history')" :active="request()->routeIs('cash.history')">
                {{ __('Revenue History') }}
            </x-timeline-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-timeline-nav-link :href="route('bank.detail')" :active="request()->routeIs('bank.detail')">
                {{ __('Bank details') }}
            </x-timeline-nav-link>
        </div>
    </nav>
</div>
