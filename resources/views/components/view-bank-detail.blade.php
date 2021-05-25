<div class="mt-5 max-w-4xl p-6 mx-auto bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
    <div>
        <span>Account Name :</span> <span class="text-indigo-500">{{Auth::user()->account_name}}</span>
        <div>
            <span>Account Number :</span> <span class="text-indigo-500">{{Auth::user()->account_number}}</span>
        </div>
        <div>
            <span>Bank Name :</span> <span class="text-indigo-500">{{Auth::user()->bank_name}}</span>
        </div>
        <div>
            <span>Branch :</span> <span class="text-indigo-500">{{Auth::user()->branch}}</span>
        </div>
    </div>
    <div class="m-6">
        <a href="{{route('bank.detail.delete', Auth::user())}}" class="deletedetail inline-flex px-2 text-xs font-semibold leading-5 text-gray-900 bg-red-500 rounded-full">Delete Detail</a>
    </div>
</div>

<script type="text/javascript">
    var elems = document.getElementsByClassName('deletedetail');
    var confirmIt = function(e) {
        if (!confirm('Delete this bank information?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
