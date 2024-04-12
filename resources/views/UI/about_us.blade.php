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
    background-color: black;
    overflow: hidden;
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
        pointer-events: none;
        margin-top: 75%;
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
        pointer-events: none;
        display: none;
        opacity: 0;
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

.Field1{
    background-color: black;
    height: inherit;
    width: inherit;
    transition: all 0.5s;
    z-index: 1;
}
.Field2{
    background-color: red;
    height: inherit;
    width: inherit;
    transition: all 0.5s;
    z-index: 1;
}

.Field3{
    background-color: gray;
    height: inherit;
    width: inherit;
    transition: all 0.5s;
    z-index: 1; 
}

.Field1:hover{
  width: calc(150%);
  z-index: 2;
}

.Field2:hover{
  width: calc(150%);
  z-index: 2;
}

.Field3:hover{
  width: calc(150%);
  z-index: 2;
}

.Field_Container{
    position: relative;
    width: 93%;
    height: 100vh;
    margin-left: 7%;
    display: flex;
    justify-content: left;
    align-items: left;
}

.fade-in {
  animation: fadeIn 1s forwards;
}

.fade-out{
  animation: fadeOut 0.5s forwards;
}

.slide-up{
    animation: slideUp 1s forwards;
}

.slide-down{
    animation: slideDown 0.5s forwards;
}

@keyframes slideUp {
  0%{
    margin-top: 75%;
  }
  100% {
    margin-top: 20%;
  }
}

@keyframes slideDown {
  0%{
    margin-top: 20%;
  }
  100% {
    margin-top: 75%;
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}

.form_div{
    background-color: white;
    width: 700px;
    height: 700px;
    z-index: 4;
}


</style>
<div class="Field_Container">
    <div class="Field1" onmouseover="toggleFadeIn()" onmouseout="toggleFadeOut()">
        <div id="Titles_Container" class="Titles_Container">
            <p class="Page_Titles">About Us</p>
        </div>
        <div class="Paragraph_Container" id="Paragraph_Container">
            <p class="Page_Paragraphs">
                Welcome to our music listening website, where the rhythm of your life finds its perfect beat! Dive into a world of endless melodies and harmonies, curated just for you. With our intuitive platform, you can create, edit, and remove playlists with ease, sculpting your musical journey to perfection. But the fun doesn't stop there - explore the diverse playlists crafted by fellow music enthusiasts, discovering new favorites with every click. Feel like sharing your own tunes? Upload your songs for free and let your creativity echo through the digital airwaves. Whether you're into chart-topping hits, indie gems, or timeless classics, we've got you covered with a vast library spanning various genres and eras. Join us on this sonic adventure, where every note resonates with passion and possibility.
            </p>
        </div>
    </div> 
    <div class="Field2" onmouseover="toggleFadeIn2()" onmouseout="toggleFadeOut()">
        <div id="Titles_Container2" class="Titles_Container">
            <p class="Page_Titles">Helpful Tips</p>
        </div>
        <div class="Paragraph_Container" id="Paragraph_Container2">
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
    </div>
    <div class="Field3" id="Field3" onmouseover="toggleFadeIn3()" onmouseout="toggleFadeOut()">
        <div id="Titles_Container3" class="Titles_Container">
            <p class="Page_Titles">Contact Us</p>
        </div>
        <div class="Paragraph_Container" id="Paragraph_Container3">
            <form>      
            <input name="name"  style="pointer-events: auto;" type="text" class="feedback-input" placeholder="Your Name" />   
            <input name="email"  style="pointer-events: auto;" type="text" class="feedback-input" placeholder="Your Email" />
            <textarea name="text"  style="pointer-events: auto;" class="feedback-input" placeholder="Comment"></textarea>
            <input type="submit"  style="pointer-events: auto;" value="SEND"/>
            </form>
        </div>
    </div>
</div>

<div class="SideBar">
    <a class="SideBarButtons" style="--clr: #2774AE" onclick="likeBeforeRedirect('{{ route('songs.index') }}')"><span><i class="fa-solid fa-house"></i></span></a>
    <a class="SideBarButtons" style="--clr: #4FFFB0" onclick="likeBeforeRedirect('{{ route('songs.user_edit', ['user' => Auth::id()]) }}')"><span><i class="fa-solid fa-user"></i></span></a>
    <a class="SideBarButtons" style="--clr: #9370DB" onclick="likeBeforeRedirect('{{ route('songs.playlist_store')}}')"><span><i class="fa-solid fa-question"></i></span></a>
    <a class="SideBarButtons" style="--clr: #660000" onclick="likeBeforeRedirect('{{ route('songs.user_logout')}}')"><span><i class="fa-solid fa-right-from-bracket"></i></span></a>
    @if(Auth::check() && Auth::user()->isArtist)
    <a class="SideBarButtons" style="--clr: #FFD700" onclick="likeBeforeRedirect('{{ route('songs.create') }}')"><span><i class="fa-solid fa-upload"></i></span></a>
    @endif
    @if(Auth::check() && Auth::user()->isAdmin)
    <a class="SideBarButtons" style="--clr: #E26310" onclick="likeBeforeRedirect('{{ route('songs.admin')}}')"><span><i class="fa-solid fa-user-tie"></i></span></a>
    @endif
    <a id="GetWidthValue" class="SideBarButtons" style="--clr: #39FF14" onclick="VolumeSliderAppear()"><span><i class="fa-solid fa-volume-high"></i></span></a>
    <div class="VolumeSliderContainer">
        <input type="range" class="VolumeSlider2.0" oninput="changeGlobalVolume2()" id="volumeSlider" min="0" value="1" max="1" step="0.1">
    </div>
</div>


<script>

function likeBeforeRedirect(url) {
    window.location.href = url;
}

function toggleFadeIn() {
    toggleFadeOut()

    var element = document.getElementById("Paragraph_Container");
    element.classList.remove("fade-out");
    setTimeout(function() {
        element.classList.add("fade-in");
    }, 500);
    document.getElementById("Titles_Container").classList.remove("slide-down");
    document.getElementById("Titles_Container").classList.add("slide-up");
    
}

function toggleFadeOut() {

    if(document.getElementById("Titles_Container").classList.contains("slide-up")){
        var element = document.getElementById("Paragraph_Container");
        element.classList.remove("fade-in");
        element.classList.add("fade-out");
        document.getElementById("Titles_Container").classList.remove("slide-up");
        document.getElementById("Titles_Container").classList.add("slide-down");

    }
    
    if(document.getElementById("Titles_Container2").classList.contains("slide-up")){
    var element = document.getElementById("Paragraph_Container2");
    element.classList.remove("fade-in");
    element.classList.add("fade-out");
    document.getElementById("Titles_Container2").classList.remove("slide-up");
    document.getElementById("Titles_Container2").classList.add("slide-down");
    }
    
    if(document.getElementById("Titles_Container3").classList.contains("slide-up")){
        var element = document.getElementById("Paragraph_Container3");
        element.classList.remove("fade-in");
        element.classList.add("fade-out");
        document.getElementById("Titles_Container3").classList.remove("slide-up");
        document.getElementById("Titles_Container3").classList.add("slide-down");
        document.getElementById("Field3").onmouseout = toggleFadeOut;
        document.getElementById("Field3").onmouseover = toggleFadeIn3;
    }
}

function toggleFadeIn2() {
toggleFadeOut()

var element = document.getElementById("Paragraph_Container2");
element.classList.remove("fade-out");
setTimeout(function() {
    element.classList.add("fade-in");
}, 400);
document.getElementById("Titles_Container2").classList.remove("slide-down");
document.getElementById("Titles_Container2").classList.add("slide-up");

}

function toggleFadeIn3() {
toggleFadeOut()

var element = document.getElementById("Paragraph_Container3");
element.classList.remove("fade-out");
setTimeout(function() {
    element.classList.add("fade-in");
}, 400);
document.getElementById("Titles_Container3").classList.remove("slide-down");
document.getElementById("Titles_Container3").classList.add("slide-up");
document.getElementById("Field3").onmouseout = null;
document.getElementById("Field3").onmouseover = null;
}




</script>

</body>
</html>
