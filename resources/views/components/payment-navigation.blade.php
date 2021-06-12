<div class="bg-blue-300">
    <nav class="flex flex-col sm:flex-row py-1 px-6 border-t-2">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('pending.bank.payment')" :active="request()->routeIs('pending.bank.payment')">
                {{ __('Pending Bank Payment') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('success.bank.payment')" :active="request()->routeIs('success.bank.payment')">
                {{ __('Success Bank Payment') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('success.online.payment')" :active="request()->routeIs('success.online.payment')">
                {{ __('Success Online Payment') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('cancel.online.payment')" :active="request()->routeIs('cancel.online.payment')">
                {{ __('Cancel Online Payment') }}
            </x-responsive-nav-link>
        </div>
    </nav>
</div>
