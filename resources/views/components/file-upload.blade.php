<div class="bg-white lg:mx-60">
    <div class="text-center pt-2">
        <span class="font-black text-md  text-gray-500 mb-10">Upload files</span>
        <span class="font-black text-sm  text-gray-400 mb-10">( png, jpg, jpeg, pdf, docx, ppt, mkv, mp4, zip, txt )</span>
    </div>
    <form action="{{route('file.upload',$lesson)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-1 gap-6 mt-4 m-6">
            <div class="mt-4">
                <label for="title" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Title <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" :value="old('title')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>

            <div class="mt-4">
                <label for="file" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">File <span class="text-red-500">*</span></label>
                <input type="file" name="file" class="border border-gray-400 block py-2 px-4 w-full rounded focus:border-indigo-300" required>
            </div>
            <div class="progress">
                <div class="bar"></div>
                <div class="percent">0%</div>
            </div>
        </div>

        <div class="text-center py-4">
            <x-success-button>
                {{ __('Upload') }}
            </x-success-button>
        </div>
    </form>
</div>

<style>
    .progress {
        position: relative;
        width: 100%;
    }

    .bar {
        background-color: #00ff00;
        width: 0%;
        height: 20px;
    }

    .percent {
        position: absolute;
        display: inline-block;
        left: 50%;
        color: #040608;
    }
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script type="text/javascript">
    var SITEURL = "{{route('document', $lesson)}}";
    $(function() {
        $(document).ready(function() {
            var bar = $('.bar');
            var percent = $('.percent');
            $('form').ajaxForm({
                beforeSend: function() {
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function(xhr) {
                    alert('File Has Been Uploaded Successfully');
                    window.location.href = SITEURL;
                }
            });
        });
    });
</script>
