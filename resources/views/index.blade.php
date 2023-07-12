<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <button class="m-5">
        <a href="/input" class="text-decoration-none text-black">Input Data Here</a>
    </button>

    <button class="m-5">
        <a href="/" class="text-decoration-none text-black">English</a>
    </button>

    <button class="m-5">
        <a href="/id" class="text-decoration-none text-black">Indonesia</a>
    </button>
  
    <table class="table">
        <thead>
            <tr>
                <th> {{ __('test.name') }} </th>
                <th> {{ __('test.nim') }} </th>
                <th> {{ __('test.grade') }} </th>
                <th> {{ __('test.course') }} </th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($datas as $dt)
                <tr>
                    <th> {{ $dt->nama }} </th>
                    <th> {{ $dt->nim }} </th>
                    <th> {{ $dt->grade }} </th>
                    <th> {{ $dt->matakuliah->mata_kuliah }} </th>
                    <th><button class="button"><a href="/update/{{ $dt->id }}" class="text-decoration-none text-dark">Update</a></button></th>
                    <th>
                        <form action="/delete/{{ $dt->id }} " method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="button" type="sbumit">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
  </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>