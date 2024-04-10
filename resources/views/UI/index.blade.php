<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    background-color: #1d2b3a;
}

.Container_Values {
  width:90%;
  margin-left: 7%;
  padding: 5px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
}

.Songs {
  opacity: 0;
  animation-delay: 5s;
  animation: slideIn2 8s ease forwards 7s;
  position: relative;
  padding:15px 25px;
  margin-left: 30px;
  height: 340px;
  border-radius: 10px;
  background: linear-gradient(180deg, #002244, #2c3968);
  width:inherit;
  transition: all 2s;
  cursor: pointer;
}

.Songs:hover{

    padding:35px 55px;
    margin-left: 50px;
    margin-right: 50px;
    box-shadow: 0 0 0 10px #002D62,
        0 0 50px #034694,
        0 0 70px #6495ED;
}

.play_container {
    width: 200px;
    height: 200px;
    background: #000;
    background-image: linear-gradient(-20deg, #ddd6f3 0%, #faaca8 100%, #faaca8 100%);
    border-radius: 50%;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15), 0 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
}

.PlayButton {
  align-items: center;
  display: flex;
  justify-content: center;
  padding-bottom: 20px;
  position: absolute;
  margin-bottom: 30%;
  margin-left: 30%;
  height: 15%;
}

.bottom {
  background: #00428c;
  border-radius: 50%;
  box-shadow: 0 1px 2.2px rgba(0, 0, 0, 0.051),
    0 2.3px 5.3px rgba(0, 0, 0, 0.059), 0 4.4px 10px rgba(0, 0, 0, 0.06),
    0 7.8px 17.9px rgba(0, 0, 0, 0.059), 0 14.6px 33.4px rgba(0, 0, 0, 0.059),
    0 35px 80px rgba(0, 0, 0, 0.07);
  cursor: pointer;
  height: 50px;
  position: absolute;
  width: 50px;
}

.PlayButton.active .bottom {
  background: #0070BB;
}

.icon {
  height: 100px;
  transform: rotate(-120deg);
  transition: transform 500ms;
  width: 100px;
  position: relative;
}

.left_side, .right_side {
  background: white;
  height: 100px;
  position: absolute;
  width: 100px;
}

.left_side {
  clip-path: polygon(
    43.77666% 55.85251%,
    43.77874% 55.46331%,
    43.7795% 55.09177%,
    43.77934% 54.74844%,
    43.77855% 54.44389%,
    43.77741% 54.18863%,
    43.77625% 53.99325%,
    43.77533% 53.86828%,
    43.77495% 53.82429%,
    43.77518% 53.55329%,
    43.7754% 53.2823%,
    43.77563% 53.01131%,
    43.77585% 52.74031%,
    43.77608% 52.46932%,
    43.7763% 52.19832%,
    43.77653% 51.92733%,
    43.77675% 51.65633%,
    43.77653% 51.38533%,
    43.7763% 51.11434%,
    43.77608% 50.84334%,
    43.77585% 50.57235%,
    43.77563% 50.30136%,
    43.7754% 50.03036%,
    43.77518% 49.75936%,
    43.77495% 49.48837%,
    44.48391% 49.4885%,
    45.19287% 49.48865%,
    45.90183% 49.48878%,
    46.61079% 49.48892%,
    47.31975% 49.48906%,
    48.0287% 49.4892%,
    48.73766% 49.48934%,
    49.44662% 49.48948%,
    50.72252% 49.48934%,
    51.99842% 49.4892%,
    53.27432% 49.48906%,
    54.55022% 49.48892%,
    55.82611% 49.48878%,
    57.10201% 49.48865%,
    58.3779% 49.4885%,
    59.6538% 49.48837%,
    59.57598% 49.89151%,
    59.31883% 50.28598%,
    58.84686% 50.70884%,
    58.12456% 51.19714%,
    57.11643% 51.78793%,
    55.78697% 52.51828%,
    54.10066% 53.42522%,
    52.02202% 54.54581%,
    49.96525% 55.66916%,
    48.3319% 56.57212%,
    47.06745% 57.27347%,
    46.11739% 57.79191%,
    45.42719% 58.14619%,
    44.94235% 58.35507%,
    44.60834% 58.43725%,
    44.37066% 58.41149%,
    44.15383% 58.27711%,
    43.99617% 58.0603%,
    43.88847% 57.77578%,
    43.82151% 57.43825%,
    43.78608% 57.06245%,
    43.77304% 56.66309%,
    43.773% 56.25486%
  );
  transition: clip-path 500ms;
}

.right_side {
  clip-path: polygon(
    43.77666% 43.83035%,
    43.77874% 44.21955%,
    43.7795% 44.59109%,
    43.77934% 44.93442%,
    43.77855% 45.23898%,
    43.77741% 45.49423%,
    43.77625% 45.68961%,
    43.77533% 45.81458%,
    43.77495% 45.85858%,
    43.77518% 46.12957%,
    43.7754% 46.40056%,
    43.77563% 46.67156%,
    43.77585% 46.94255%,
    43.77608% 47.21355%,
    43.7763% 47.48454%,
    43.77653% 47.75554%,
    43.77675% 48.02654%,
    43.77653% 48.29753%,
    43.7763% 48.56852%,
    43.77608% 48.83952%,
    43.77585% 49.11051%,
    43.77563% 49.38151%,
    43.7754% 49.65251%,
    43.77518% 49.9235%,
    43.77495% 50.1945%,
    44.48391% 50.19436%,
    45.19287% 50.19422%,
    45.90183% 50.19408%,
    46.61079% 50.19394%,
    47.31975% 50.1938%,
    48.0287% 50.19366%,
    48.73766% 50.19353%,
    49.44662% 50.19338%,
    50.72252% 50.19353%,
    51.99842% 50.19366%,
    53.27432% 50.1938%,
    54.55022% 50.19394%,
    55.82611% 50.19408%,
    57.10201% 50.19422%,
    58.3779% 50.19436%,
    59.6538% 50.1945%,
    59.57598% 49.79136%,
    59.31883% 49.39688%,
    58.84686% 48.97402%,
    58.12456% 48.48572%,
    57.11643% 47.89493%,
    55.78697% 47.16458%,
    54.10066% 46.25764%,
    52.02202% 45.13705%,
    49.96525% 44.01371%,
    48.3319% 43.11074%,
    47.06745% 42.4094%,
    46.11739% 41.89096%,
    45.42719% 41.53667%,
    44.94235% 41.3278%,
    44.60834% 41.24561%,
    44.37066% 41.27137%,
    44.15383% 41.40575%,
    43.99617% 41.62256%,
    43.88847% 41.90709%,
    43.82151% 42.24461%,
    43.78608% 42.62041%,
    43.77304% 43.01978%,
    43.773% 43.428%
  );
  transition: clip-path 500ms;
}

.pointer {
  border-radius: 50%;
  cursor: pointer;
  height: 50px;
  position: absolute;
  -webkit-tap-highlight-color: transparent;
  width: 50px;
}

.PlayButton.active .icon {
  transform: rotate(-90deg);
}

.PlayButton.active .left_side {
  clip-path: polygon(
    56.42249% 57.01763%,
    54.93283% 57.0175%,
    53.00511% 57.01738%,
    50.83554% 57.01727%,
    48.62036% 57.01718%,
    46.55585% 57.01709%,
    44.83822% 57.01702%,
    43.66373% 57.01698%,
    43.22863% 57.01696%,
    42.86372% 57.01904%,
    42.56988% 57.01621%,
    42.3402% 56.99486%,
    42.16778% 56.94152%,
    42.0457% 56.84267%,
    41.96705% 56.68478%,
    41.92493% 56.45432%,
    41.91246% 56.13777%,
    41.91258% 55.76282%,
    41.9129% 55.37058%,
    41.91335% 54.96757%,
    41.91387% 54.56032%,
    41.91439% 54.15537%,
    41.91485% 53.75926%,
    41.91517% 53.3785%,
    41.91529% 53.01965%,
    41.94275% 52.72355%,
    42.02117% 52.51653%,
    42.14465% 52.38328%,
    42.30727% 52.30854%,
    42.50308% 52.27699%,
    42.72619% 52.27341%,
    42.97065% 52.28248%,
    43.23056% 52.2889%,
    43.94949% 52.28896%,
    45.45083% 52.28912%,
    47.47445% 52.28932%,
    49.76027% 52.28957%,
    52.04818% 52.28981%,
    54.07805% 52.29003%,
    55.5898% 52.29019%,
    56.32332% 52.29024%,
    56.58221% 52.28816%,
    56.83726% 52.28948%,
    57.07897% 52.30593%,
    57.29794% 52.34898%,
    57.48468% 52.43029%,
    57.62978% 52.56146%,
    57.72375% 52.7541%,
    57.75718% 53.01981%,
    57.75713% 53.37763%,
    57.75699% 53.81831%,
    57.75679% 54.31106%,
    57.75657% 54.82507%,
    57.75635% 55.32958%,
    57.75615% 55.79377%,
    57.75601% 56.18684%,
    57.75596% 56.47801%,
    57.7549% 56.50122%,
    57.74034% 56.5624%,
    57.6955% 56.64887%,
    57.60334% 56.748%,
    57.44691% 56.84712%,
    57.20925% 56.93358%,
    56.87342% 56.99471%
  );
}

.PlayButton.active .right_side {
  clip-path: polygon(
    56.42249% 42.44625%,
    54.93283% 42.44637%,
    53.00511% 42.44649%,
    50.83554% 42.4466%,
    48.62036% 42.4467%,
    46.55585% 42.44679%,
    44.83822% 42.44685%,
    43.66373% 42.4469%,
    43.22863% 42.44691%,
    42.86372% 42.44483%,
    42.56988% 42.44767%,
    42.3402% 42.46902%,
    42.16778% 42.52235%,
    42.0457% 42.6212%,
    41.96705% 42.77909%,
    41.92493% 43.00956%,
    41.91246% 43.32611%,
    41.91258% 43.70105%,
    41.9129% 44.0933%,
    41.91335% 44.49631%,
    41.91387% 44.90355%,
    41.91439% 45.3085%,
    41.91485% 45.70462%,
    41.91517% 46.08537%,
    41.91529% 46.44422%,
    41.94275% 46.74032%,
    42.02117% 46.94735%,
    42.14465% 47.0806%,
    42.30727% 47.15534%,
    42.50308% 47.18688%,
    42.72619% 47.19047%,
    42.97065% 47.1814%,
    43.23056% 47.17497%,
    43.94949% 47.17491%,
    45.45083% 47.17476%,
    47.47445% 47.17455%,
    49.76027% 47.1743%,
    52.04818% 47.17406%,
    54.07805% 47.17384%,
    55.5898% 47.17369%,
    56.32332% 47.17363%,
    56.58221% 47.17571%,
    56.83726% 47.17439%,
    57.07897% 47.15795%,
    57.29794% 47.1149%,
    57.48468% 47.03359%,
    57.62978% 46.90242%,
    57.72375% 46.70977%,
    57.75718% 46.44406%,
    57.75713% 46.08625%,
    57.75699% 45.64557%,
    57.75679% 45.15282%,
    57.75657% 44.6388%,
    57.75635% 44.1343%,
    57.75615% 43.6701%,
    57.75601% 43.27703%,
    57.75596% 42.98586%,
    57.7549% 42.96265%,
    57.74034% 42.90148%,
    57.6955% 42.815%,
    57.60334% 42.71587%,
    57.44691% 42.61675%,
    57.20925% 42.53029%,
    56.87342% 42.46916%
  );
}

label {
  position: relative;
  width: 50px;
  left: 80%;
  align-items: right;
  display: flex;
  justify-content: right;
  padding-right: 20px;
  cursor: pointer;
}

label input {
  appearance: none;
}

label span i {
  color: black;
  fill: black;
  font-size: 35px;
  transition: 0.5s;
}

label input:checked + span i {
    animation: animateD 3s forwards;
}

@keyframes animateD{
        0%{
            color: black;
        }
        50%{
            color: #960018;
            text-shadow: 0 0 10px #960018, 0 0 20px #960018, 0 0 30px #960018;
        }
        100%{
            color: #960018;
            text-shadow: 0 0 4px #D21F3C, 0 0 8px #D21F3C, 0 0 12px #D21F3C;
        }
    }


    #EditIcon{
        position: relative;
        align-items: right;
        display: flex;
        justify-content: right;
        font-size: 17px;
    }

    .Title{
        color: white;
        font-size: 35px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .ArtistText{
        color: white;
        font-size: 20px;
    }

    #ArtistsPos{
        position: absolute;
        align-items: left;
        display: flex;
        justify-content: left;
        bottom: 37%;
    }

    #SongsPos{
        position: relative;
        width:inherit;
        align-items: left;
        display: flex;
        justify-content: left;
        height: 180px;
    }

    .Playlists {
        opacity: 0;
        animation: slideIn4 8s ease forwards 7s;
        position: relative;
        padding: 15px 25px;
        margin-left: 30px;
        height: 340px;
        border-radius: 10px;
        background: linear-gradient(180deg, #005A9C, #012169);
        width: inherit;
        transition: all 2s;
        cursor: pointer;
}

    .Playlists:hover{
        padding:35px 55px;
        margin-left: 50px;
        margin-right: 50px;
        box-shadow: 0 0 0 10px #0076CE,
        0 0 50px #6495ED,
        0 0 70px #4B9CD3;
    }

    .PlaylistArtists{
        padding-top: 10px;
        color: white;
        font-size: 27px;
        font-weight: bold;
    }

    #SignlePlaylist{
        width: 18.75%;
    }

    .Container_UserPlaylist {
    width: 55%;
    height: 420px;
    margin-right: 30%;
    padding: 5px;
    margin-top: -40px;
    overflow: hidden;
    position: relative;
}

.PlaylistsWrapper {
    display: flex;
    transition: transform 0.5s ease;
}

.User_Playlists {
    padding: 15px 25px;
    margin-left: 30px;
    height: 340px;
    border-radius: 10px;
    background: linear-gradient(180deg, #012169, #0093AF);
    width: 30.7%;
    flex: 0 0 auto;
    transition: all 2s;
    cursor: pointer;
}

.User_Playlists:hover {
        padding:35px 55px;
        margin-left: 50px;
        margin-right: 50px;
        box-shadow: 0 0 0 10px #4B9CD3,
        0 0 50px #0CAFFF,
        0 0 70px #00FFFF;
}

.NavigationButton {
  position: relative;
  background-image: linear-gradient(92.88deg, #455EB5 9.16%, #5643CC 43.89%, #673FD7 64.72%);
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  flex-shrink: 0;
  font-family: "Inter UI","SF Pro Display",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;
  font-size: 20px;
  font-weight: bold;
  height: 4rem;
  padding: 2px;
  text-align: center;
  text-shadow: rgba(0, 0, 0, 0.25) 0 3px 8px;
  transition: all .5s;
  touch-action: manipulation;
}

.NavigationButton:hover {
  box-shadow: rgba(80, 63, 205, 0.5) 0 1px 30px;
  transition-duration: .1s;
}

#leftNav{
    bottom: -196px;
    left: 0.8%;
    z-index: 1;
}

#rightNav{
    bottom: -196px;
    left: 97.1%;
    z-index: 1;
}

.PlaylistCreate{
        background: #7CB9E8;
        top: 20px;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 1.5em;
        letter-spacing: 0.1em;
        font-weight: 400;
        padding: 10px 30px;
        transition: 0.5s;
        margin-left: 29%;
        cursor: pointer;
    }

    .PlaylistCreate:hover{
        background: var(--clr);
        color: var(--clr);
        box-shadow: 0 0 35px var(--clr);
    }

    .PlaylistCreate:before{
        content: '';
        position: absolute;
        inset: 2px;
        background: #27282c;
    }

    .PlaylistCreate span{
        position: relative;
        z-index: 1;
    }

    .PlaylistCreatePos{
        position: absolute;
        width: 20%;
        margin-top: 3%;
        margin-left: 51%;
    }

    #Liked_Songs_Pos{
        position: absolute;
        padding-top: 30px;
        left: 71.8%;
        width: 460px;
    }

    @keyframes animateText{
    0%{
            color: #fff;
    }
    100%{
        color: #fff;
        text-shadow: 0 0 15px #00A693, 0 0 25px #00A693, 0 0 35px #00A693;
    }
    }

    .animateText {
    animation: animateText 3s linear forwards;
    }

    .Liked_Playlist{
        position: relative;
        padding:15px 25px;
        margin-left: 30px;
        margin-right: 30px;
        height: 340px;
        border-radius: 10px;
        background: linear-gradient(180deg, #004687, #0093AF);
        width:inherit;
        transition: all 2s;
        cursor: pointer;
    }

    .Liked_Playlist:hover{
        padding:35px 55px;
        margin-left: 50px;
        margin-right: 50px;
        box-shadow: 0 0 0 10px #4B9CD3,
        0 0 50px #E0115F,
        0 0 70px #B22222;
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
        opacity: 0;
        color: white;
        font-size: 50px;
        margin-top: 10px;
        font-weight: bold;
        animation: slideIn 4s ease forwards 6s;
    }

    @keyframes slideIn {
  0% {
    opacity: 0;
    transform: translateY(-100%);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

  @keyframes slideIn2 {
  0% {
    opacity: 0;
    transform: translateX(-100%);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }

}

@keyframes slideIn3 {
  0% {
    opacity: 0;
    transform: translateX(200%);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }

}

@keyframes slideIn4 {
  0% {
    opacity: 0;
    transform: translateY(200%);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }

}

    .Songs2{
        opacity: 0;
        animation-delay: 7s;
        animation: slideIn3 8s ease forwards 7s;
        position: relative;
        padding:15px 25px;
        margin-top: 25px;
        margin-left: 30px;
        height: 340px;
        border-radius: 10px;
        background: linear-gradient(180deg, #2c3968, #005A9C);
        width:inherit;
        transition: all 2s;
        cursor: pointer;
    }

    .Songs2:hover{

        padding:35px 55px;
        margin-left: 50px;
        margin-right: 50px;
        box-shadow: 0 0 0 10px #002244,
            0 0 50px #034694,
            0 0 70px #00BFFF;
}

    .SideBar{
        opacity: 0;
        animation-delay: 7s;
        animation: slideIn2 2s ease forwards 11s;
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

    .WelcomeMessage {
  position: absolute;
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.WelcomeMessage::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  backdrop-filter: blur(8px);
  z-index: 2;
  animation: welcomeAnimation 16s linear forwards;
  animation-iteration-count: 1;
}

.WelcomeMessage p {
  z-index: 3;
  text-align: center;
  color: white;
  font-size: 70px;
  font-weight: bold;
  animation: welcomeAnimationTextDissapear 8s linear forwards;
  animation-iteration-count: 1;
}

@keyframes welcomeAnimation {
  0% {
    backdrop-filter: blur(8px);
  }
  90% {
    backdrop-filter: blur(7px);
  }
  93% {
    backdrop-filter: blur(0px);
  }
  100%{
    z-index: -2;
  }
}

@keyframes welcomeAnimationTextDissapear {
  0% {
    color:white
  }
  99% {
    color: transparent;
    opacity: 0;
  }
  100% {
    opacity: 0;
    display:none;
  }
}

.playAnimation {
  animation-play-state: running;
}

.stopAnimation {
  animation-play-state: paused !important;
}

svg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
}

.controls {
  position: absolute;
  top: 49%;
  left: 22%;
  width: 60px;
  height: 350px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  transform: rotate(90deg);
  transform-origin: top left;
  overflow: hidden;
}

.controls i {
  font-size: 29px;
  position: relative;
  z-index: 1;
  cursor: pointer;
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

.User_Personal_Playlists_Container{
        width:90%;
        padding: 5px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: center;
        -ms-flex-pack: justify;
}

#PlayButtonContainer{
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: center;
        -ms-flex-pack: justify;
}

#PlaylistCreatePos{
    padding-left: 50%;
    padding-right: 80%;
}

#PlaylistCreatePos i{
  font-size: 60px;
  cursor: pointer;
}

#PlaylistCreatePos2{
  margin-right: 20px;
}


/*https://codepen.io/ksenia-k/pen/jXbWaJ*/

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
@if($PlayAnimation == 1)
  <div class="WelcomeMessage">
    <p id="WelcomeUser">Welcome {{Auth::user()->username}}</p>
  </div>
@else
<div class="WelcomeMessage">
    <p id="WelcomeUser"></p>
  </div>
@endif
<body onload="PlayWelcomeAnimation()">
<div class="Titles_Container">
    <p class="Page_Titles">Explore Songs</p>
</div>
<div class="Container_Values">
@php
    $fixedSongAmount = 0;
    $displayedSongIds = [];
@endphp
@foreach($songs as $song)
    @if($fixedSongAmount < 5)
    @php $displayedSongIds[] = $song->id; @endphp
    <div id="SongsUniqueId{{$song->id}}" class="Songs">
        @if(Auth::id() == $song->Owners_ID)
        <div id="EditIcon">
        <a onclick="likeBeforeRedirect('{{ route('songs.edit', ['song' => $song->id]) }}')"><i class="fas fa-edit"></i></a>
        </div>
        @endif
        <div id="SongsPos">
        <p class="Title">{{$song->Song_Name}}</p>
        </div>
        <div id="ArtistsPos">
        <p class="ArtistText">Artist: {{$song->Artists_Name}}</p>
        </div>
        <label>
        <input type="checkbox" name="liked_songs[]" id="{{ $song->id }}"
        {{ in_array($song->id, Auth::user()->Liked_Songs) ? 'checked' : '' }}
        onchange="likefunc(this.getAttribute('data-likedid'))" data-likedid="{{$song->id}}">
            <span><i class="fa-regular fa-heart"></i></span>
        </label>
        <audio class="AudioClass" id="Song{{$song->id}}" src="/storage/Songs/{{ $song->Files_Name }}" preload="none"></audio>
        <div class="PlayButton" onclick="Play({{$song->id}}, this)">
            <div class="bottom"></div>
            <div class="icon">
                <div class="left_side"></div>
                <div class="right_side"></div>
            </div>
            <div class="pointer"></div>
        </div>
        <!--<div class="controls">
    <input type="range" class="VolumeSlider" id="volumeSlider{{$song->id}}" min="0" max="1" value="1" step="0.01" onchange="changeGlobalVolume({{$song->id}})">
    <i class="fa-solid fa-volume-high" id="volumeIcon{{$song->id}}" onclick="toggleVolumeSlider({{$song->id}})"></i>
</div>
          -->
          <input type="range" id="durationBar{{$song->id}}" style="display: none" min="0" onchange=" ChangeSongsPlayDuration({{$song->id}})">

    </div>
    @php
        $fixedSongAmount = $fixedSongAmount + 1;
    @endphp
    @endif
    @if($fixedSongAmount > 5)
    @break;
    @endif
@endforeach
</div>
<div class="Container_Values">
    @foreach($songs as $song)
        @if(!in_array($song->id, $displayedSongIds))
        <div class="Songs2">
        @if(Auth::id() == $song->Owners_ID)
        <div id="EditIcon">
        <a onclick="likeBeforeRedirect('{{ route('songs.edit', ['song' => $song->id]) }}')"><i class="fas fa-edit"></i></a>
        </div>
        @endif
        <div id="SongsPos">
        <p class="Title">{{$song->Song_Name}}</p>
        </div>
        <div id="ArtistsPos">
        <p class="ArtistText">Artist: {{$song->Artists_Name}}</p>
        </div>
        <label>
        <input type="checkbox" name="liked_songs[]" id="{{ $song->id }}"
        {{ in_array($song->id, Auth::user()->Liked_Songs) ? 'checked' : '' }}
        onchange="likefunc(this.getAttribute('data-likedid'))" data-likedid="{{$song->id}}">
            <span><i class="fa-regular fa-heart"></i></span>
        </label>
        <audio class="AudioClass" id="Song{{$song->id}}" src="/storage/Songs/{{ $song->Files_Name }}" preload="none"></audio>
        <div class="PlayButton" onclick="Play({{$song->id}}, this)">
            <div class="bottom"></div>
            <div class="icon">
                <div class="left_side"></div>
                <div class="right_side"></div>
            </div>
            <div class="pointer"></div>
        </div>

        <input type="range" id="durationBar{{$song->id}}" style="display: none" min="0" onchange=" ChangeSongsPlayDuration({{$song->id}})">

    </div>
        @endif
    @endforeach
</div>
<div class="Titles_Container">
    <p class="Page_Titles">Playlists Made By Other Users</p>
</div>
<div class="Container_Values">
@foreach ($randomPlaylist as $playlist)
    <div class="Playlists" onclick="likeBeforeRedirect('{{ route('songs.playlist_listen', ['playlist' => $playlist->id]) }}')">
        <p class="Title">{{$playlist->name}}</p>
        <p class="ArtistText">Creator: {{$playlist->playlists_owner}}</p>
        <p class="PlaylistArtists">Contains Artists like:</p>

        @php
        $stringId = $playlist->song_id_list;
        $idsArray = explode(',', $stringId);
        $ArtistNames = [];
        $ArtistNamesShorter = [];

        foreach ($songs as $song) {
            if (in_array($song->id, $idsArray)) {
                if (in_array($song->Artists_Name, $ArtistNames) == false) {
                    $ArtistNames[] = $song->Artists_Name;
                }
            }
        }

        foreach ($ArtistNames as $artist) {
            if (count($ArtistNamesShorter) < 5) {
                $ArtistNamesShorter[] = $artist;
            }
        }
        @endphp

        @foreach ($ArtistNamesShorter as $artistsname)
            <p class="ArtistText">{{$artistsname}}</p>
        @endforeach
    </div>
@endforeach
</div>
<div class="Titles_Container">
    <p class="Page_Titles">Your Playlists</p>
</div>
<div class="User_Personal_Playlists_Container">
  <div class="Container_UserPlaylist">
    <div>
    <button class="NavigationButton" id="leftNav" onclick="scrollPlaylists(-1)"><</button>
    <button class="NavigationButton" id="rightNav" onclick="scrollPlaylists(1)">></button>
    </div>
    <div class="PlaylistsWrapper">
        @foreach($usersPlaylist as $playlist)
            <div class="User_Playlists" onclick="likeBeforeRedirect('{{ route('songs.playlist_listen', ['playlist' => $playlist->id]) }}')">
                <p class="Title">{{$playlist->name}}</p>
                <p class="ArtistText">Creator: {{$playlist->playlists_owner}}</p>
                <p class="PlaylistArtists">Contains Artists like:</p>
                @php
                $stringId = $playlist->song_id_list;
                $idsArray = explode(',', $stringId);
                $ArtistNames = [];
                $ArtistNamesShorter = [];

                foreach ($songs as $song) {
                    if (in_array($song->id, $idsArray)) {
                        if (in_array($song->Artists_Name, $ArtistNames) == false) {
                            $ArtistNames[] = $song->Artists_Name;
                        }
                    }
                }

                    foreach($ArtistNames as $artist){
                        if(count($ArtistNamesShorter) < 5){
                            $ArtistNamesShorter[] = $artist;
                        }
                    }
                @endphp

                @foreach($ArtistNamesShorter as $artistsname)
                    <p class="ArtistText">{{$artistsname}}</p>
                @endforeach
            </div>
    @endforeach
      </div>
  </div>
      <div class="PlaylistCreatePos">
      <p id="PlaylistCreatePos2" class="Title">Create A New Playlist?</p>
      <div id="PlayButtonContainer">
      <a id="PlaylistCreatePos" style="font-size: 30px;"><i onclick="likeBeforeRedirect('{{ route('songs.playlist_store') }}')" class="fa-solid fa-square-plus"></i></a>
      </div>     
      </div>
  <div class="Container_Values" id="Liked_Songs_Pos">
    <div class="Liked_Playlist" onclick="likeBeforeRedirect('{{ route('songs.playlist_liked_songs') }}')">
      <p class="Title">Songs You've Liked</p>
      <p class="ArtistText">Playlist Full Of Your Favorites</p>
      </div>
  </div>
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
</div>

<script>

let globalVolume = 1;

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

function changeGlobalVolume(id){
  var audio = document.getElementById(`Song${id}`);
  audio.volume = globalVolume;
  globalVolume = document.getElementById(`volumeSlider${id}`).value;

  var elements = document.getElementsByClassName("VolumeSlider");
  var ids = Array.from(elements).map((element) => element.id);

    ids.forEach((id) => {
      document.getElementById(id).value = globalVolume;
    });
}

function changeGlobalVolume2(){

  globalVolume = document.getElementById("volumeSlider").value;

  var elements = document.getElementsByClassName("AudioClass");
  var ids = Array.from(elements).map((element) => element.id);

    ids.forEach((id) => {
      document.getElementById(id).volume = globalVolume;
    });

}

function toggleVolumeSlider(songId) {
  const volumeSlider = document.getElementById(`volumeSlider${songId}`);
  volumeSlider.classList.toggle('slider-visible');
}

function PlayWelcomeAnimation() {
  var playAnimation = <?php echo $PlayAnimation; ?>;

  var welcomeMessage = document.querySelector('.WelcomeMessage');
  var welcomeMessageText = document.querySelector('.WelcomeMessage p');
  var sideBar = document.querySelector('.SideBar');
  var songs = document.querySelector('.Songs');
  var songs2 = document.querySelector('.Songs2');
  var playlists = document.querySelector('.Playlists');
  var pageTitles = document.querySelector('.Page_Titles');

  if (playAnimation !== 1) {
    welcomeMessage.classList.add('stopAnimation');
    welcomeMessageText.classList.add('stopAnimation');
    welcomeMessage.style.opacity = '0';
    welcomeMessage.style.zIndex = '-1';
  } else {
    welcomeMessage.classList.remove('stopAnimation');
    welcomeMessageText.classList.remove('stopAnimation');
    welcomeMessage.style.opacity = '';
    welcomeMessage.style.zIndex = '';
  }

  var elementsToChange = document.querySelectorAll('.Page_Titles, .Playlists, .Songs, .Songs2, .SideBar');

  elementsToChange.forEach(function(element) {
    if (playAnimation !== 1) {
      element.classList.add('stopAnimation');
      element.style.opacity = '1';
    } else {
      element.classList.remove('stopAnimation');
      element.style.opacity = '';
    }
  });
}


const playlistCreate = document.getElementById('PlaylistCreatePos');
const playlistCreatePos2 = document.getElementById('PlaylistCreatePos2');

playlistCreate.addEventListener('mouseenter', () => {
    playlistCreatePos2.classList.add('animateText');
});

playlistCreate.addEventListener('mouseleave', () => {
    playlistCreatePos2.classList.remove('animateText');
});

let currentIndex = 0;
const playlistWrapper = document.querySelector('.PlaylistsWrapper');
const playlists = document.querySelectorAll('.User_Playlists');

function scrollPlaylists(direction) {
    const playlistWidth = playlists[0].offsetWidth + 36;
    const maxIndex = playlists.length - 1;
  
    currentIndex = Math.min(Math.max(currentIndex + direction, 0), maxIndex);
    const newPosition = -currentIndex * playlistWidth;
  
    playlistWrapper.style.transform = `translateX(${newPosition}px)`;
}

function CreatePlaylist(url){
    window.location.href = url;
}

function PlayLikedSongs(url){
    window.location.href = url;
}

function ChangeSongsPlayDuration(id) {
  var audio = document.getElementById(`Song${id}`);
  audio.currentTime = document.getElementById(`durationBar${id}`).value;
}


function Play(id, current) {
  var audio = document.getElementById(`Song${id}`);
  var totalDuration = document.getElementById(`durationBar${id}`);
  totalDuration.max = audio.duration;

  if (current.className === "PlayButton active") {
    current.classList.remove('active');
    audio.pause();
  } else {
    current.classList.toggle('active');
    audio.currentTime = document.getElementById(`durationBar${id}`).value;
    audio.volume = globalVolume;
    audio.play();
  }
}

function PlaylistListen(url){

    window.location.href = url;
}
let ListOfLikedSongs = {!! json_encode(Auth::user()->Liked_Songs) !!};

function likefunc(id){

    if(document.getElementById(`${id}`).checked){
        ListOfLikedSongs.push(id);
    }else{
        for(let i = 0; i < ListOfLikedSongs.length; i++){
            if(ListOfLikedSongs[i] == id){
                ListOfLikedSongs.splice(i, 1);
                break;
            }
        }
    }

}

function likeBeforeRedirect(targetUrl) {
    fetch('/songs/updatelikes', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            liked_songs: ListOfLikedSongs
        })
    })
    .then(response => {
        if (response.ok) {
            window.location.href = targetUrl;
        } else {
            console.error('Failed to update liked songs.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

</script>

</body>
</html>