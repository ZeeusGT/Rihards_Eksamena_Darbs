<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="{{ asset('js/Songs_Editing_Logic.js') }}"></script> <!-- Can't locate the js file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body onload="Edit_Styles_On_Load()">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body{
        background-color: #4B0082;
    }

    svg {
        position: fixed;
        z-index: -1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
    }

    .Titles_Container{
            width:90%;
            margin-left: 7%;
            padding: 5px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: center;
            -ms-flex-pack: justify;
        }

        .Page_Titles{
            color: white;
            font-size: 50px;
            margin-top: 10px;
            font-weight: bold;
        }

    .Div_Container{
        position: relative;
            border: 3px solid black;
            margin: 10% auto 0;
            width: 30%;
            height: 700px;
            border-radius: 3.3%;
            background: linear-gradient(180deg, #4E2A84, #72246C);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
    }

    .SideBar{
        position: fixed;
        width: 7%;
        top: 0;
        bottom: 0;
        overflow: auto;
        padding: 5px;
        display: flex;
        align-items: top;
        flex-direction: column;
        background: linear-gradient(240deg, #72246C, #4E2A84);
    }

    .SideBarButtons{
        display: block;
        border: 3px solid white;
        background: #191C27;
        top: 20px;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 1.5em;
        letter-spacing: 0.1em;
        font-weight: 400;
        padding: 10px 30px;
        transition: 0.5s;
        margin-bottom: 15px;
        cursor: pointer;
        width: 100%;
        text-align: center;
    }

    .SideBarButtons:hover{
        background: var(--clr);
        box-shadow: 0 0 35px var(--clr);
    }

    .SideBarButtons:before{
        content: '';
        inset: 2px;
        background: #27282c;
    }

    .SideBarButtons span{
        position: relative;
        z-index: 1;
    }

    .VolumeSlider {
        position: absolute;
        bottom: 0;
        width: 100%;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .VolumeSliderContainer {
        overflow: hidden;
        display: flex;
        transition: all 0.5s ease-in-out;
        opacity: 0;
    }
    .inputBox {
    position: relative;
    width: 340px;
    margin-bottom: 15px;
}

.inputBox input {
    width: 100%;
    padding: 10px;
    border: 1px solid rgba(255, 255, 255, 0.25);
    background: #301934;
    border-radius: 5px;
    outline: none;
    color: #fff;
    font-size: 1em;
}

.inputBox span {
    position: absolute;
    left: 0;
    padding: 10px;
    pointer-events: none;
    font-size: 1em;
    color: rgba(255, 255, 255, 0.25);
    text-transform: uppercase;
    transition: 0.5s;
}

.inputBox input.focused ~ span {
    color: #fff;
    transform: translateX(10px) translateY(-7px);
    font-size: 0.65em;
    padding: 0 10px;
    background: #9966CC;
    border-left: 1px solid #fff;
    border-right: 1px solid #fff;
    letter-spacing: 0.2em;
}

.inputBox input.focused{
    border: 2px solid #fff;
}

.inputBox input:focus ~ span {
    color: #fff;
    transform: translateX(10px) translateY(-7px);
    font-size: 0.65em;
    padding: 0 10px;
    background: #9966CC;
    border-left: 1px solid #fff;
    border-right: 1px solid #fff;
    letter-spacing: 0.2em;
}

.inputBox input:focus{
    border: 2px solid #fff;
}

#file {
    display: none;
}

.inputFile {
    position: relative;
    margin-top: 25%;
}

#filesLabel {
    padding: 20% 33.2% 20% 33.2%;
    border-radius: 6px;
    font-size: 20px;
    border: 2px dashed #999;
    transition: all 0.16s ease-in;
}

#filesLabel:hover {
    color: white;
    border: 2px dashed #311432;
    cursor: pointer;
}

.addedHover {
    color: green !important;
    border: 2px dashed green !important;
    cursor: pointer;
}

.addedHover:hover {
    color: red !important;
    border: 2px dashed red !important;
}

.submit_button{
    position: relative;
    margin-top: 80px;
    padding: 5px;
    display: flex;
    justify-content: space-between;
}

.button-37 {
  background-color: #4F284B;
  border: 2px solid #392A48;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  outline: none;
  outline: 0;
  padding: 10px 25px;
  text-align: center;
  transform: translateY(0);
  transition: transform 150ms, box-shadow 150ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-37:hover {
  box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
  transform: translateY(-2px);
}

.button-37-delete {
  background-color: #8D272B;
  border: 2px solid #392A48;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  outline: none;
  outline: 0;
  padding: 10px 25px;
  margin-right: 80px;
  text-align: center;
  transform: translateY(0);
  transition: transform 150ms, box-shadow 150ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-37-delete:hover {
  box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
  transform: translateY(-2px);
}

@media (min-width: 768px) {
  .button-37 {
    padding: 10px 30px;
  }
}

.inputfield_container{
        position: relative;
}

</style>

<svg preserveAspectRatio="xMidYMid slice" viewBox="10 10 80 80">
    <defs>
        <style>
            @keyframes rotate {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
            .out-top-custom {
                animation: rotate 20s linear infinite;
                transform-origin: 13px 25px;
            }
            .in-top-custom {
                animation: rotate 10s linear infinite;
                transform-origin: 13px 25px;
            }
            .out-bottom-custom {
                animation: rotate 25s linear infinite;
                transform-origin: 84px 93px;
            }
            .in-bottom-custom {
                animation: rotate 15s linear infinite;
                transform-origin: 84px 93px;
            }
        </style>
    </defs>
    <path fill="#32174D" class="out-top-custom" d="M37-5C25.1-14.7,5.7-19.1-9.2-10-28.5,1.8-32.7,31.1-19.8,49c15.5,21.5,52.6,22,67.2,2.3C59.4,35,53.7,8.5,37-5Z"/>
    <path fill="#301934" class="in-top-custom" d="M20.6,4.1C11.6,1.5-1.9,2.5-8,11.2-16.3,23.1-8.2,45.6,7.4,50S42.1,38.9,41,24.5C40.2,14.1,29.4,6.6,20.6,4.1Z"/>
    <path fill="#9867C5" class="out-bottom-custom" d="M105.9,48.6c-12.4-8.2-29.3-4.8-39.4.8-23.4,12.8-37.7,51.9-19.1,74.1s63.9,15.3,76-5.6c7.6-13.3,1.8-31.1-2.3-43.8C117.6,63.3,114.7,54.3,105.9,48.6Z"/>
    <path fill="#BE93E4" class="in-bottom-custom" d="M102,67.1c-9.6-6.1-22-3.1-29.5,2-15.4,10.7-19.6,37.5-7.6,47.8s35.9,3.9,44.5-12.5C115.5,92.6,113.9,74.6,102,67.1Z"/>
</svg>

<div class="Titles_Container">
    <p class="Page_Titles">Edit Selected Song</p>
</div>
<div class="Div_Container">
    <form method='POST' action="{{ route('songs.update', ['song' => $Current_Song->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="inputfield_container">
        <div class="inputBox">
                <input type='text' onchange="removeSpan('Song_Name')" id="Song_Name" value = "{{$Current_Song->Song_Name}}" name="Song_Name" autocomplete="off"/>
                <span id="Songs_Name_Span">Songs Name</span>
                @error('Song_Name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputBox">
                <input type='text' onchange="removeSpan('Artists_Name')" id="Artists_Name" value = "{{$Current_Song->Artists_Name}}" name="Artists_Name"/>
                <span id="Artists_Name_Span" >Artists Name</span>
                @error('Artists_Name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputBox">
                <input type='text' onchange="removeSpan('Songs_Genre')" id="Songs_Genre" value = "{{$Current_Song->Songs_Genre}}" name="Songs_Genre"/>
                <span id="Songs_Genre_Span">Songs Genre</span>
                @error('Songs_Genre')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        <div class="submit_button">
                <input class="button-37" type='submit' value="Submit"/>
                </form>
                <form method='POST' action="{{ route('songs.delete', ['id' => $Current_Song->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <input class="button-37-delete" type='submit' value="Delete"/>
                </form>
        </div>
    </div>
</div>

<div class="SideBar">
<a  class="SideBarButtons" style="--clr: #2774AE" onclick="likeBeforeRedirect('{{ route('songs.index') }}')"><span><i class="fa-solid fa-house"></i></span></a>
<a  class="SideBarButtons" style="--clr: #4FFFB0" onclick="likeBeforeRedirect('{{ route('songs.user_edit', ['user' => Auth::id()]) }}')"><span><i class="fa-solid fa-user"></i></span></a>
<a  class="SideBarButtons" style="--clr: #FFD700" onclick="likeBeforeRedirect('{{ route('songs.aboutus')}}')"><span><i class="fa-solid fa-question"></i></span></a>
<a  class="SideBarButtons" style="--clr: #660000" onclick="likeBeforeRedirect('{{ route('songs.user_logout')}}')"><span><i class="fa-solid fa-right-from-bracket"></i></i></span></a>
@if(Auth::check() && Auth::user()->isArtist)
    <a class="SideBarButtons" style="--clr: #9370DB" onclick="likeBeforeRedirect('{{ route('songs.create') }}')"><span><i class="fa-solid fa-upload"></i></span></a>
@endif
@if(Auth::check() && Auth::user()->isAdmin)
<a  class="SideBarButtons" style="--clr: #E26310" onclick="likeBeforeRedirect('{{ route('songs.admin')}}')"><span><i class="fa-solid fa-user-tie"></i></i></span></a>
@endif
<a  id="GetWidthValue" class="SideBarButtons" style="--clr: #39FF14" onclick="VolumeSliderAppear()"><span><i class="fa-solid fa-volume-high"></i></i></span></a>
<div class="VolumeSliderContainer">
    <input type="range" class="VolumeSlider2.0" oninput="changeGlobalVolume2()" id="volumeSlider" min="0" value="1" max="1" step="0.1">
  </div>

<script>
    document.getElementById('input').addEventListener('change', function(e) {
        if (e.target.files[0]) {
            document.getElementById('Songs_Real_Path').value = e.target.files[0].name;
        }
    });

    let alreadyUploaded = false;

    function VolumeSliderAppear() {
        const volumeSliderContainer = document.querySelector('.VolumeSliderContainer');
        const visible = volumeSliderContainer.style.opacity;

        const target = document.querySelector('.SideBar');
        const sliderswidth = window.getComputedStyle(target).width;

        if (visible == 0) {
            volumeSliderContainer.style.width = `${sliderswidth}`;
            volumeSliderContainer.style.opacity = 1;
        } else {
            volumeSliderContainer.style.width = '0px';
            volumeSliderContainer.style.opacity = 0;
        }
    }

        function likeBeforeRedirect(targetUrl) {
                window.location.href = targetUrl;
    }

        function SubmitForm(){
            console.log("From Submitted")
        }

        function Edit_Styles_On_Load(){
            removeSpan('Song_Name')
            removeSpan('Artists_Name')
            removeSpan('Songs_Genre')
        }

        function removeSpan(id) {
        const inputElement = document.getElementById("Song_Name");
        const spanElement = document.getElementById("Songs_Name_Span");

        const inputElement2 = document.getElementById("Artists_Name");
        const spanElement2 = document.getElementById("Artists_Name_Span");

        const inputElement3 = document.getElementById("Songs_Genre");
        const spanElement3 = document.getElementById("Songs_Genre_Span");

        if (id === "Song_Name") {
            if (inputElement.value !== "") {
                inputElement.classList.add("focused");
            } else {
                inputElement.classList.remove("focused");
            }
        }else if(id === "Artists_Name"){
            if (inputElement2.value !== "") {
                inputElement2.classList.add("focused");
            } else {
                inputElement2.classList.remove("focused");
            }
        }else if(id === "Songs_Genre"){
            if (inputElement3.value !== "") {
                inputElement3.classList.add("focused");
            } else {
                inputElement3.classList.remove("focused");
            }
        }
    }

    function UploadSong() {
        let currentFile = document.getElementById("file").value;

        if (currentFile !== "") {
            if (alreadyUploaded == false) {
                let filesLabel = document.getElementById("filesLabel");

                filesLabel.style.padding = "20% 45% 20% 45%";
                filesLabel.style.color = "green";
                filesLabel.style.borderColor = "green";
                filesLabel.title = currentFile;
                filesLabel.classList.toggle("addedHover");
                filesLabel.innerHTML = `<i style="font-size: 30px" class="fa-solid fa-circle-check"></i>`;

                alreadyUploaded = true;
            } else {
                let filesLabel = document.getElementById("filesLabel");

                filesLabel.style.padding = "";
                filesLabel.style.color = "";
                filesLabel.style.borderColor = "";
                filesLabel.title = "";
                filesLabel.classList.remove("addedHover");
                filesLabel.innerHTML = `Upload File`;

                document.getElementById("file").value = "";
                alreadyUploaded = false;
            }
        }
    }


    function changeIcon() {
        let filesLabel = document.getElementById("filesLabel");

        if (alreadyUploaded == true) {
            filesLabel.innerHTML = `<i style="font-size: 30px" class="fa-solid fa-circle-minus"></i>`;
        }
    }

    function changeBack() {
        let filesLabel = document.getElementById("filesLabel");

        if (alreadyUploaded == true) {
            filesLabel.innerHTML = `<i style="font-size: 30px" class="fa-solid fa-circle-check"></i>`;
        }
    }

    document.getElementById("file").addEventListener("click", function (event) {
        if(alreadyUploaded == true){
        event.preventDefault();
        UploadSong()
        }
    });

</script>
</body>
</html>