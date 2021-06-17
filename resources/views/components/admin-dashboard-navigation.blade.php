<div class="bg-blue-300">
    <nav class="flex flex-col sm:flex-row py-1 px-6 border-t-2">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('all.user')" :active="request()->routeIs('all.user')">
                {{ __('All User') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('all.teacher')" :active="request()->routeIs('all.teacher')">
                {{ __('All Teacher') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('not.verified.user')" :active="request()->routeIs('not.verified.user')">
                {{ __('Not Verified User') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('not.verified.account')" :active="request()->routeIs('not.verified.account')">
                {{ __('Not Verified Account') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('pending.verify.account')" :active="request()->routeIs('pending.verify.account')">
                {{ __('Pending Verify Account') }}
            </x-responsive-nav-link>
        </div>

        @role('super_admin')
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('inactive.user')" :active="request()->routeIs('inactive.user')">
                {{ __('Inactive User') }}
            </x-responsive-nav-link>
        </div>
        @endrole
    </nav>
</div>
