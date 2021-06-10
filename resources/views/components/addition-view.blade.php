<main class="p-5 bg-light-blue">
    <div class="flex justify-center items-start my-2">
        <div class="w-full sm:w-10/12 md:w-1/2 my-1">
            <ul class="flex flex-col">
                @forelse ($additions as $addition)
                <li class="bg-white my-2 shadow-lg" x-data="accordion({{ $addition->getRouteKey() }})">
                    <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                        <span>{{ $addition->question }}</span>
                        <svg :class="handleRotate()" class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                            </path>
                        </svg>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()" class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all">
                        <p class="p-3 text-gray-900">
                            {{ $addition->answer }}
                        </p>
                    </div>
                    @can('delete', $addition->program )
                    <a href="{{route('delete.addition', $addition->getRouteKey())}}" class="text-red-500 additiondeletebtn">Delete</a>
                    @endcan
                </li>
                @empty

                @endforelse
            </ul>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/spruce@1.1.0/dist/spruce.umd.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"></script>
<script>
    Spruce.store('accordion', {
        tab: 0,
    });

    const accordion = (idx) => ({
        handleClick() {
            this.$store.accordion.tab = this.$store.accordion.tab === idx ? 0 : idx;
        },
        handleRotate() {
            return this.$store.accordion.tab === idx ? 'rotate-180' : '';
        },
        handleToggle() {
            return this.$store.accordion.tab === idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
    });
</script>

<script type="text/javascript">
    var elems = document.getElementsByClassName('additiondeletebtn');
    var confirmIt = function(e) {
        if (!confirm('Delete this FAQ?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
