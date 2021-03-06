
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login </title>
</head>

<body>
    <div class="container">
        <h1>THÊM BÀI VIÊT </h1>
        {!! Form::open(['url' => 'post/store', 'method' => 'POST', 'files' => true]) !!}
        @csrf
        <div class="form-group">
            {!! Form::label('Title', null, ['for' => 'title']) !!}
            {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'Enter Title']) !!}

            @error('title')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            {{-- cú pháp laravel colective Form::tên thẻ('name', value, [id, class, hoặc bất cứ thứ gì]) --}}

            {!! Form::label('content', null, ['for' => 'content']) !!}
            {!! Form::textarea('content', null, ['id' => 'content', 'class' => 'form-control', 'placeholder' => 'Enter Content']) !!}
            {!! Form::file('fileUpload', ['class' => 'form-control-file']) !!}
            @error('content')
                <small class="alert alert-danger">{{ $message }}</small>
            @enderror


        </div>

        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}


        {!! Form::close() !!}
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
