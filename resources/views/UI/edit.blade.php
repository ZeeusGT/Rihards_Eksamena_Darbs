<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="{{ asset('js/Songs_Editing_Logic.js') }}"></script> <!-- Can't locate the js file -->
</head>
<body>
    <p1>Edit</p1>
    <form method='POST' action="{{ route('songs.update', ['song' => $Current_Song->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div>
            <input type='text' name="Song_Name" placeholder="Songs Name" value="{{$Current_Song->Song_Name}}"></input>
        </div>
        <div>
            <input type='text' name="Artists_Name" placeholder="Artists Name" value="{{$Current_Song->Artists_Name}}"></input>
        </div>
        <div>
            <input type='text' name="Songs_Genre" placeholder="Songs Genre" value="{{$Current_Song->Songs_Genre}}"></input>
        </div>
        <div>
            <p>Current Song: {{$Current_Song->Files_Name}}</p>
            <input id="input" type='file' name="NewSong" accept="audio/*"></input>
            <input style="display: none;" type='text' name="Song" id="Songs_Real_Path" value="{{$Current_Song->Files_Name}}"></input>
        </div>
        <div>
            <input type='submit' value="Submit"></input>
        </div>
    </form>

<script>
    document.getElementById('input').addEventListener('change', function(e) {
        if (e.target.files[0]) {
            document.getElementById('Songs_Real_Path').value = e.target.files[0].name;
        }
    });
</script>
</body>
</html>