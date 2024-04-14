<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

svg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    z-index: -1;
}

body{
    background-color: #1d2b3a;
}

.Titles_Container{
        width: inherit;
        padding: 5px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: center;
        -ms-flex-pack: justify;
}

.Title{
        color: white;
        font-size: 35px;
        margin-bottom: 10px;
        font-weight: bold;
}

.Table_Container {
  width: inherit;
  margin-left: 4%;
  padding: 5px;
  display: flex;
  justify-content: center;
}

#Table {
  margin-bottom: 6%;
  border-collapse: collapse;
  width: 80%;

}


#Table td,
#Table th {
  border-top: 3px solid #ddd;
  border-bottom: 3px solid #ddd;
  font-size: 23px;
  font-weight: bold;
  padding-left: 8px;
  padding-top: 24px;
  padding-bottom: 24px;
}

.TableEven {
  background-color: #004C7A;
}

.TableOdd {
  background-color: #006DB4;
}

.TableEven:hover, .TableOdd:hover {
  background-color: #5D8AA8;
  color: white;
  cursor: pointer;
}

#Table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0a2351;
  color: white;
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
        background: linear-gradient(180deg, #36454F, #010127);
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

    .controls .slider-visible {
    transform: translateY(0);
    }

    .VolumeSliderContainer {
    overflow: hidden;
    display: flex;
    transition: all 0.5s ease-in-out;
    opacity: 0;
    }

    .search-box{
  width: fit-content;
  height: fit-content;
  position: absolute;
  margin-left: 64.6%;
  margin-top: 5px;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color: #2c3968;
  padding-right: 40px;
  color:#fff;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 400px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 400px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
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
    <path fill="#2a52be" class="out-top-custom" d="M37-5C25.1-14.7,5.7-19.1-9.2-10-28.5,1.8-32.7,31.1-19.8,49c15.5,21.5,52.6,22,67.2,2.3C59.4,35,53.7,8.5,37-5Z"/>
    <path fill="#4B9CD3" class="in-top-custom" d="M20.6,4.1C11.6,1.5-1.9,2.5-8,11.2-16.3,23.1-8.2,45.6,7.4,50S42.1,38.9,41,24.5C40.2,14.1,29.4,6.6,20.6,4.1Z"/>
    <path fill="#1F305E" class="out-bottom-custom" d="M105.9,48.6c-12.4-8.2-29.3-4.8-39.4.8-23.4,12.8-37.7,51.9-19.1,74.1s63.9,15.3,76-5.6c7.6-13.3,1.8-31.1-2.3-43.8C117.6,63.3,114.7,54.3,105.9,48.6Z"/>
    <path fill="#002fa7" class="in-bottom-custom" d="M102,67.1c-9.6-6.1-22-3.1-29.5,2-15.4,10.7-19.6,37.5-7.6,47.8s35.9,3.9,44.5-12.5C115.5,92.6,113.9,74.6,102,67.1Z"/>
</svg>
<div class="Titles_Container">
    <p class="Title">Search Results For {{$search_prompt}}</p>
    <div class="search-box">
    <button class="btn-search"><i class="fas fa-search"></i></button>
    <input onkeydown="handleKeyPress(event)" type="text" id="search_inp" class="input-search" placeholder="Playlists Name:">
    </div>
</div>
    <div class="Table_Container">
    <table id="Table">
    <th>Playlist Name</th>
    <th>Made By</th>
    @php $counter = 0; @endphp
    @if (count($results) > 0)
        @foreach ($results as $result)
            @if($counter++ % 2 == 0)
                <tr class="TableEven">
            @else
                <tr class="TableOdd">
            @endif
                <td onclick="redirect('{{ route('songs.playlist_listen', ['playlist' => $result->id]) }}')">{{ $result->name }}</td>
                <td onclick="redirect('{{ route('songs.playlist_listen', ['playlist' => $result->id]) }}')">{{ $result->playlists_owner}}</td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="4">No results found.</td>
        </tr>
    @endif
</table>
 </div>
 <div class="SideBar">
<a  class="SideBarButtons" style="--clr: #2774AE" onclick="redirect('{{ route('songs.index') }}')"><span><i class="fa-solid fa-house"></i></span></a>
<a  class="SideBarButtons" style="--clr: #4FFFB0" onclick="redirect('{{ route('songs.user_edit', ['user' => Auth::id()]) }}')"><span><i class="fa-solid fa-user"></i></span></a>
<a  class="SideBarButtons" style="--clr: #9370DB" onclick="redirect('{{ route('songs.playlist_store')}}')"><span><i class="fa-solid fa-question"></i></span></a>
<a  class="SideBarButtons" style="--clr: #660000" onclick="redirect('{{ route('songs.user_logout')}}')"><span><i class="fa-solid fa-right-from-bracket"></i></i></span></a>
@if(Auth::check() && Auth::user()->isArtist)
    <a class="SideBarButtons" style="--clr: #FFD700" onclick="redirect('{{ route('songs.create') }}')"><span><i class="fa-solid fa-upload"></i></span></a>
@endif
@if(Auth::check() && Auth::user()->isAdmin)
<a  class="SideBarButtons" style="--clr: #E26310" onclick="redirect('{{ route('songs.admin')}}')"><span><i class="fa-solid fa-user-tie"></i></i></span></a>
@endif
<a  id="GetWidthValue" class="SideBarButtons" style="--clr: #39FF14" onclick="VolumeSliderAppear()"><span><i class="fa-solid fa-volume-high"></i></i></span></a>
<div class="VolumeSliderContainer">
    <input type="range" class="VolumeSlider2.0" oninput="changeGlobalVolume2()" id="volumeSlider" min="0" value="1" max="1" step="0.1">
  </div>
</div>
<div id="AudioContainerAnimation" class="AudioControls">
    <div class="DurationContainer">
        <input type="range" value="0" style="z-index: 2;" id="SongsDurationBar" class="DurationSlider">
    </div>
    <div class="DurationTimerContainer">
        <p id="CurrentDuration"></p>
        <p id="TotalDuration"></p>
    </div>
    <div class="Buttons">
        <div id="AudioControlsPlayButton" class="PlayButton" onclick="PlayCurrentSong()">
            <div class="bottom"></div>
            <div class="icon">
                <div class="left_side"></div>
                <div class="right_side"></div>
            </div>
            <div class="pointer"></div>
    </div>
</div>
</body>

<script>

let globalVolume = 1;
let audio;
let oldAudio;

let CurrentlyPlayling = null;

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

function changeGlobalVolume2(){

globalVolume = document.getElementById("volumeSlider").value;

var elements = document.getElementsByClassName("AudioClass");
var ids = Array.from(elements).map((element) => element.id);

  ids.forEach((id) => {
    document.getElementById(id).volume = globalVolume;
  });

}

function handleKeyPress(event) {

    if (event.key === 'Enter') {

        var searchInputValue = document.getElementById("search_inp").value;
        var routeUrl = "{{ route('songs.playlist_search', ['search_prompt' => ':searchInputValue']) }}";
        routeUrl = routeUrl.replace(':searchInputValue', searchInputValue);
        redirect(routeUrl);

    }
}

function redirect(url){
    window.location.href = url;
}

</script>
</body>
</html>