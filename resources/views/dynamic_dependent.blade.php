<!DOCTYPE html>
<html>

<head>
    <title>Ajax Dynamic Dependent Dropdown in Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style type="text/css">
        .box {
            width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <br />
    <div class="container box">
        <h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br />
        <div class="form-group">
            <select name="medium" id="medium" class="form-control input-lg dynamic" data-dependent="grade">
                <option value="">Select medium</option>
                @foreach($medium_list as $medium)
                <option value="{{ $medium->medium}}">{{ $medium->medium }}</option>
                @endforeach
            </select>
        </div>
        <br />
        <div class="form-group">
            <select name="grade" id="grade" class="form-control input-lg dynamic" data-dependent="subject">
                <option value="">Select grade</option>
            </select>
        </div>
        <br />
        <div class="form-group">
            <select name="subject" id="subject" class="form-control input-lg">
                <option value="">Select subject</option>
            </select>
        </div>
        {{ csrf_field() }}
        <br />
        <br />
    </div>

    <script>
        $(document).ready(function() {

            $('.dynamic').change(function() {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('dynamicdependent.fetch') }}",
                        method: "POST",
                        data: {
                            select: select,
                            value: value,
                            _token: _token,
                            dependent: dependent
                        },
                        success: function(result) {
                            $('#' + dependent).html(result);
                        }

                    })
                }
            });

            $('#medium').change(function() {
                $('#grade').val('');
                $('#subject').val('');
            });

            $('#grade').change(function() {
                $('#subject').val('');
            });


        });
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>

