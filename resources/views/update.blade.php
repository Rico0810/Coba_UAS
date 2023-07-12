<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

  <body>
    <form action="/ubah" class="mt-5" method="POST">
        @method('PUT')
        @csrf
        <div class="nama">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value=" {{ $mhs->nama }} " required>
            @error('nama')
                {{ $message }}
            @enderror
        </div>

        <div class="nim">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" value=" {{ $mhs->nim }} " required>
            @error('nim')
                {{ $message }}
            @enderror
        </div>

        <div class="grade">
            <label for="grade">Grade</label>
            <input type="number" name="grade" id="grade" value=" {{ $mhs->grade }} " required>
            @error('grade')
                {{ $message }}
            @enderror
        </div>

        <div class="matakuliah">
            <label for="matakuliah">Course</label>
            <select name="matakuliah" id="matakuliah">
                <option value="" selected disabled>Select Course</option>
                @foreach($matakuliahs as $mk)
                    <option value=" {{ $mk->id }} " @if($mhs->matakuliah_id == $mk->id) selected @endif>{{ $mk->mata_kuliah }}></option>
                @endforeach
            </select>
            @error('matakuliah')
                {{ $message }}
            @enderror
        </div>

        <input type="text" value="{{ $mhs->id }}" name="mhs_id" style="display:none">

        <button class="button" type="submit">Submit</button>
    </form>
  </body>

</html>