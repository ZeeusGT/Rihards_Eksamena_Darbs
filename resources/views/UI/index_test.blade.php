<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <audio controls id="song_player" src="/public/Songs_Folder/5.mp3" preload="none"></audio>
    <button onclick="changeCurrentTimestamp()">Change Timestamp To 30</button>

    <script>

    function changeCurrentTimestamp(){
        audio = document.getElementById("song_player")

        audio.currentTime = 30; //30 seconds;
    }

    </script>
</body>
</html>