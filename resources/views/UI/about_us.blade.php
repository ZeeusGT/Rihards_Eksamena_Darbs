<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

body{
    background-color: #FF9F00;
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

    .Page_Paragraphs{
        color: white;
        font-size: 25px;
        margin-top: 10px;
    }

    .Paragraph_Container{
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
        background: linear-gradient(240deg, #F26E01, #F28F1C);
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
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        
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

@media (min-width: 768px) {
  .button-37 {
    padding: 10px 30px;
  }
}

.inputfield_container{
        position: relative;
}

#List_Positioning{
    margin-left: 4%;
    list-style: none;
}

#List_Positioning li{
    margin-bottom: 23px;
}

form{
    max-width:420px; margin:50px auto;
}

.feedback-input {
  color:black;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: white;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus{
    border:2px solid #CC4949;
}

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover{
    background:#CC4949;
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
    <path fill="#FEBA4F" class="out-top-custom" d="M37-5C25.1-14.7,5.7-19.1-9.2-10-28.5,1.8-32.7,31.1-19.8,49c15.5,21.5,52.6,22,67.2,2.3C59.4,35,53.7,8.5,37-5Z"/>
    <path fill="#FFA600" class="in-top-custom" d="M20.6,4.1C11.6,1.5-1.9,2.5-8,11.2-16.3,23.1-8.2,45.6,7.4,50S42.1,38.9,41,24.5C40.2,14.1,29.4,6.6,20.6,4.1Z"/>
    <path fill="#F26E01" class="out-bottom-custom" d="M105.9,48.6c-12.4-8.2-29.3-4.8-39.4.8-23.4,12.8-37.7,51.9-19.1,74.1s63.9,15.3,76-5.6c7.6-13.3,1.8-31.1-2.3-43.8C117.6,63.3,114.7,54.3,105.9,48.6Z"/>
    <path fill="#EE5921" class="in-bottom-custom" d="M102,67.1c-9.6-6.1-22-3.1-29.5,2-15.4,10.7-19.6,37.5-7.6,47.8s35.9,3.9,44.5-12.5C115.5,92.6,113.9,74.6,102,67.1Z"/>
</svg>

<div class="Titles_Container">
    <p class="Page_Titles">About Us</p>
</div>
<div class="Paragraph_Container">
    <p class="Page_Paragraphs">
Welcome to our music listening website, where the rhythm of your life finds its perfect beat! Dive into a world of endless melodies and harmonies, curated just for you. With our intuitive platform, you can create, edit, and remove playlists with ease, sculpting your musical journey to perfection. But the fun doesn't stop there - explore the diverse playlists crafted by fellow music enthusiasts, discovering new favorites with every click. Feel like sharing your own tunes? Upload your songs for free and let your creativity echo through the digital airwaves. Whether you're into chart-topping hits, indie gems, or timeless classics, we've got you covered with a vast library spanning various genres and eras. Join us on this sonic adventure, where every note resonates with passion and possibility.
    </p>
</div>
<div class="Titles_Container">
    <p class="Page_Titles">Helpful Tips</p>
</div>
<div class="Paragraph_Container">
    <img src="/public/Img_Folder/SideBar.png">
    <ul id="List_Positioning" class="Page_Paragraphs">
        <li>Main Page - Redirects You To The Main Page Of Rihify</li>
        <li>Your Account - Edit Your Account Details Here</li>
        <li>About Us - A Brief Explenation On What This Website Is About</li>
        <li>Logout - Exits You From Your Current Account</li>
        <li>Upload - Share Songs With Other Users Of This Website</li>
        <li>Volume - Volume Slider</li>
    </ul>
</div>
<div class="Titles_Container">
    <p class="Page_Titles">Contact Us</p>
</div>
<div class="Paragraph_Container">
<form>      
  <input name="name" type="text" class="feedback-input" placeholder="Your Name" />   
  <input name="email" type="text" class="feedback-input" placeholder="Your Email" />
  <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
  <input type="submit" value="SEND"/>
</form>
</div>
<div class="SideBar">
<a  class="SideBarButtons" style="--clr: #2774AE" onclick="likeBeforeRedirect('{{ route('songs.index') }}')"><span><i class="fa-solid fa-house"></i></span></a>
<a  class="SideBarButtons" style="--clr: #4FFFB0" onclick="likeBeforeRedirect('{{ route('songs.user_edit', ['user' => Auth::id()]) }}')"><span><i class="fa-solid fa-user"></i></span></a>
<a  class="SideBarButtons" style="--clr: #9370DB" onclick="likeBeforeRedirect('{{ route('songs.playlist_store')}}')"><span><i class="fa-solid fa-question"></i></span></a>
<a  class="SideBarButtons" style="--clr: #660000" onclick="likeBeforeRedirect('{{ route('songs.user_logout')}}')"><span><i class="fa-solid fa-right-from-bracket"></i></i></span></a>
@if(Auth::check() && Auth::user()->isArtist)
    <a class="SideBarButtons" style="--clr: #FFD700" onclick="likeBeforeRedirect('{{ route('songs.create') }}')"><span><i class="fa-solid fa-upload"></i></span></a>
@endif
@if(Auth::check() && Auth::user()->isAdmin)
<a  class="SideBarButtons" style="--clr: #E26310" onclick="likeBeforeRedirect('{{ route('songs.admin')}}')"><span><i class="fa-solid fa-user-tie"></i></i></span></a>
@endif
<a  id="GetWidthValue" class="SideBarButtons" style="--clr: #39FF14" onclick="VolumeSliderAppear()"><span><i class="fa-solid fa-volume-high"></i></i></span></a>
<div class="VolumeSliderContainer">
    <input type="range" class="VolumeSlider2.0" oninput="changeGlobalVolume2()" id="volumeSlider" min="0" value="1" max="1" step="0.1">
</div>

<script>

function likeBeforeRedirect(url){
    window.location.href = url;
}

</script>

</body>
</html>
