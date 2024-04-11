<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

svg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    z-index: -1;
}

body{
    background-color: #1b2e30;
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
  border-collapse: collapse;
  width: 80%;
}

#Table td,
#Table th {
  border: 3px solid #ddd;
  font-size: 20px;
  font-weight: bold;
  padding: 8px;
}

.TableEven {
  background-color: #06ac8c;
}

.TableEven .bottom{
    background-color: #318CE7;
}

.TableOdd .bottom{
    background-color: #0066b2;
}

.TableOdd {
  background-color: #048970;
}

.TableEven2 {
  background-color: #2d6a4f;
}

.TableOdd2 {
  background-color: #40916c;
}

.TableEven2 .bottom{
    background-color: #74c69d;
}

.TableOdd2 .bottom{
    background-color: #2d6a4f;
}


.TableEven:hover, .TableOdd:hover {
  background-color: #008080;
}
#Table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #035646;
  color: white;

}

.CurrentTable{
    border-collapse: collapse;
    width: 80%;
}

.TableEven2:hover, .TableOdd2:hover {
  background-color: #1ca9c9;
}

.CurrentTable:nth-child(even) {background-color: #f2f2f2;}

.CurrentTable td,
.CurrentTable th{
  border: 3px solid #ddd;
  font-size: 20px;
  font-weight: bold;
  padding: 8px;
}

.CurrentTable th{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1b4332;
  color: white;
}

.ButtonsStyle{
        position: relative;
        display: block;
        border: 3px solid white;
        background: #191C27;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 1.5em;
        letter-spacing: 0.1em;
        font-weight: 400;
        transition: 0.5s;
        cursor: pointer;
        width: 10%;
        text-align: center;
    }

    .ButtonsStyle:hover{
        background: var(--clr);
        box-shadow: 0 0 35px var(--clr);
    }

    .ButtonsStyle:before{
        content: '';
        inset: 2px;
        background: #27282c;
    }

    .ButtonsStyle span{
        position: relative;
        z-index: 1;
    }

    .ButtonsStyle2{
        position: relative;
        margin-left: 30px;
        padding-left: 5px;
        display: block;
        border: 3px solid white;
        background: #191C27;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 1.5em;
        letter-spacing: 0.1em;
        transition: 0.5s;
        cursor: pointer;
        text-align: center;
        width: 18%;
    }

    .ButtonsStyle2:hover{
        background: var(--clr);
        box-shadow: 0 0 35px var(--clr);
    }

    .ButtonsStyle2:before{
        content: '';
        inset: 2px;
        background: #27282c;
    }

    .ButtonsStyle2 span{
        position: relative;
        z-index: 1;
    }

    .ButtonContainer{
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: right;
        -ms-flex-pack: justify;
        padding-top: 20px;
        padding-right: 20px;
    }

    .ButtonContainer .ButtonsStyle{
        font-size: 50px;
    }

    .Form_bg {
    border: solid #081c15 5px;
    position: absolute;
    display: none;
    opacity: 0;
    z-index: -1;
    top: 50%;
    left: 35%;
    width: 30%;
    height: 400px;
    border-radius: 3.3%;
    background: linear-gradient(180deg, #2d6a4f, #74c69d);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    transition: transform 0.3s ease;
}

.Form_bg .SideBarButtons{
    background: #1b4332;
}

.Form_bg2 {
    position: absolute;
    display: none;
    opacity: 0;
    top: 50%;
    left: 32%;
    width: 40%;
    height: 500px;
    border-radius: 3.3%;
    border: solid green 4px;
    background: linear-gradient(180deg, #0B9069, #17B282);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    transition: transform 1s ease;
    z-index: -1;
}

 @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(100%);
        }
        to {
            opacity: 1;
            transform: translateY(-60%);
            z-index: 2;

        }
    }

    @keyframes slideOut {
    from {
        opacity: 1;
        transform: translateY(-60%);
    }
    to {
        opacity: 0;
        transform: translateY(100%);
        z-index: 0;
    }
}

.slideIn {
    animation: slideIn 0.5s ease forwards;
}

.slideOut {
    animation: slideOut 0.5s ease forwards;
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
        background: linear-gradient(240deg, #1b2e30, #008080);
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

.PlayButton {
  align-items: center;
  margin-top: 20px;
  display: flex;
  justify-content: center;
}

.bottom {
  background: #00428c;
  border-radius: 50%;
  box-shadow: 0 1px 2.2px rgba(0, 0, 0, 0.051),
    0 2.3px 5.3px rgba(0, 0, 0, 0.059), 0 4.4px 10px rgba(0, 0, 0, 0.06),
    0 7.8px 17.9px rgba(0, 0, 0, 0.059), 0 14.6px 33.4px rgba(0, 0, 0, 0.059),
    0 35px 80px rgba(0, 0, 0, 0.07);
  cursor: pointer;
  height: 60px;
  position: absolute;
  width: 60px;
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

.Action_Container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80px;
    padding-bottom: 25px;
}

.Action_Container button{
    top: 11px;
}

label {
  position: relative;
  width: 50px;
  margin-top: 20px;
  margin-left: 35px;
  align-items: right;
  display: flex;
  justify-content: right;
  padding-right: 20px;
}

label input {
  appearance: none;
}

label span i {
  color: black;
  fill: black;
  font-size: 40px;
  transition: 0.5s;
  cursor: pointer;
}

label input:checked + span i {
    animation: animateA 3s forwards;
}

@keyframes animateA{
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

.Form_Pos .Title{
    margin-bottom: 5%;
}

.Form_Pos input{
    margin-bottom: 17%;
}

.Form_Pos .SideBarButtons{
    Width: 40%;
    height: 10%;
}

.Form_Pos #fixMargin{
    margin-top: -4%;
}

.Error{
    display: none;
    opacity: 0;
}

#ErrorMessage{
        transition: 0.5s;
        position: relative;
        animation: animateC 3s linear forwards;
    }

    @keyframes animateC{
        0%{
            color: #b92e34;
            border: 1px solid black;
        }
        100%{
            color: #b92e34;
            text-shadow: 0 0 10px #960018, 0 0 20px #960018, 0 0 60px #960018;
        }
    }

.inputBox {
    position: relative;
    width: 400px;
}

.inputBox input {
    width: 100%;
    padding: 10px;
    border: 1px solid rgba(255, 255, 255, 0.25);
    background: #1b4332;
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

.inputBox input:focus ~ span {
    color: #081c15;
    transform: translateX(10px) translateY(-7px);
    font-size: 0.65em;
    padding: 0 10px;
    background: #b7e4c7;
    border-left: 1px solid #b7e4c7;
    border-right: 1px solid #b7e4c7;
    letter-spacing: 0.2em;
}

.inputBox input:focus{
    border: 1px solid #b7e4c7;
}

.Info_Container{
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

.Info{
        font-size: 35px;
        margin-bottom: 10px;
        animation: animateD 3s linear forwards;
    }

    @keyframes animateD{
        0%{
            color: #cad2c5;
        }
        100%{
            color: #cad2c5;
            text-shadow: 0 0 10px #52b788, 0 0 20px #74c69d, 0 0 30px #95d5b2;
        }
    }

.Add i{
    font-size: 45px;
    cursor: pointer;
}

.RemoveStyle i{
    font-size: 45px;
    cursor: pointer;
}

.Error_Pos{
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
    <path fill="#40916c" class="out-bottom-custom" d="M105.9,48.6c-12.4-8.2-29.3-4.8-39.4.8-23.4,12.8-37.7,51.9-19.1,74.1s63.9,15.3,76-5.6c7.6-13.3,1.8-31.1-2.3-43.8C117.6,63.3,114.7,54.3,105.9,48.6Z"/>
    <path fill="#52b788" class="in-bottom-custom" d="M102,67.1c-9.6-6.1-22-3.1-29.5,2-15.4,10.7-19.6,37.5-7.6,47.8s35.9,3.9,44.5-12.5C115.5,92.6,113.9,74.6,102,67.1Z"/>
</svg>
<div class="ButtonContainer">
        <a class="ButtonsStyle" style="--clr: #2774AE" onclick="ShowForm()"><span>Create</span></a>
</div>
<div class="Titles_Container">
    <p class="Title">List Of Songs You've Liked</p>
</div>
<div class="Table_Container">
    <table id="Table">
        <th>Songs Name</th>
        <th>Artists Name</th>
        <th>Songs Genre</th>
        <th>Action</th>
        @php $counter = 0; @endphp
        @foreach($array as $id)
            @foreach($songs as $song)
                @if($song->id == $id)
                    @if($counter++ % 2 == 0)
                        <tr class="TableEven">
                    @else
                        <tr class="TableOdd">
                    @endif
                        <td>{{$song->Song_Name}}</td>
                        <td>{{$song->Artists_Name}}</td>
                        <td>{{$song->Songs_Genre}}</td>
                        <td>
                        <div class="Action_Container">
                        <audio class="AudioClass" id="Song{{$song->id}}" src="/public/Songs_Folder/{{ $song->Files_Name }}" preload="none"></audio>
                        <div class="PlayButton" onclick="Play({{$song->id}}, this)">
                                <div class="bottom"></div>
                                <div class="icon">
                                    <div class="left_side"></div>
                                    <div class="right_side"></div>
                                </div>
                                <div class="pointer"></div>
                            </div>
                            <label>
                            <input type="checkbox" name="liked_songs[]" id="check{{ $song->id }}"
                        {{ in_array($song->id, Auth::user()->Liked_Songs) ? 'checked' : '' }}
                        onchange="likefunc('{{ $song->id }}')">
                                <span><i class="fa-regular fa-heart"></i></span>
                            </label>
                            <label class="Add">
                            <i class="fa-solid fa-circle-plus" id="{{$song->id}}" onclick="add(this.getAttribute('data-songid'), this.getAttribute('data-songname'), this.getAttribute('data-artistname'), this.getAttribute('data-songgenre'), this.getAttribute('data-songpath'))" 
                            data-songid="{{$song->id}}" 
                            data-songname="{{$song->Song_Name}}" 
                            data-artistname="{{$song->Artists_Name}}" 
                            data-songgenre="{{$song->Songs_Genre}}" 
                            data-songpath="{{$song->Files_Name}}"
                            ></i>
                            </label>
                        </div>
                    </div>
                        </td>
                    </tr>
                @endif
            @endforeach
        @endforeach
    </table>
</div>
<div class="Titles_Container">
    <p class="Title">Current Playlist:</p>
</div>
<div class="Table_Container">
    <table id="TableOfPlaylistSongs" class="CurrentTable">
        <th>Songs Name</th>
        <th>Artists Name</th>
        <th>Songs Genre</th>
        <th>Action</th>
    </table>
</div>
<div class="Info_Container">
    <p id="InfoValue"class="Info">You Currently Have An Empty Playlist, Click Plus To Add Songs To Your Playlist</p>
</div>
<div id="formPos" class="Form_bg">
<form id="PlaylistCreateForm" method='POST' action="{{ route('songs.playlist_store') }}">
    @csrf
    @method('POST')
            <div class="Form_Pos">
                <p class="Title">Lastly What Would You Call Your Playlist:</p>
                <div class="inputBox">
                <input id="PlaylistsName" type='text'name="Playlists_Name"></input>
                <span>Playlists Name:</span>
                </div>
                        <a id="fixMargin" class="SideBarButtons" style="--clr: #800000" onclick="HideForm()"><span>Return</span></a>
                        <a class="SideBarButtons" style="--clr: #39FF14" onclick="SubmitValidation()"><span>Submit</span></a>
                </div>
        </div>
        <input type='text' id="List" style="display: none; opacity: 0;" name="ListOfSongs"></input>
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
</div>

    <div id="Error" class="Form_bg2">
            <div class="Error_Pos">
                <p id="ErrorTitle" class="Title">Error Message:</p>
            </div>
            <div>
                <p id="ErrorMessage" class="Title">Something Went Wrong</p>
            </div>
        </div>

<script>

    const List_Of_Song_Ids = [];
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

    let ListOfLikedSongs = {!! json_encode(Auth::user()->Liked_Songs) !!};

function likefunc(id) {
    const checkbox = document.getElementById(`check${id}`);
    const parsedId = id.replace('check', '');

    if (checkbox.checked) {
        ListOfLikedSongs.push(parsedId);
    } else {
        const index = ListOfLikedSongs.indexOf(parsedId);
        if (index !== -1) {
            ListOfLikedSongs.splice(index, 1);
        }
    }
}

    function add(songId, songsName, songsArtsit, songsGenre, songsPath) {

        let table = document.getElementById("TableOfPlaylistSongs");

        let row = table.insertRow(-1);
   
        let c1 = row.insertCell(0);
        let c2 = row.insertCell(1);
        let c3 = row.insertCell(2);
        let c4 = row.insertCell(3);
   
        c1.innerText = songsName
        c2.innerText = songsArtsit
        c3.innerText = songsGenre
        c4.innerHTML = `<div class="Action_Container">
                            <div class="PlayButton" onclick="Play(${songId}, this)">
                                <div class="bottom"></div>
                                <div class="icon">
                                    <div class="left_side"></div>
                                    <div class="right_side"></div>
                                </div>
                                <div class="pointer"></div>
                            </div>
                            <label class="RemoveStyle">
                            <i class="fa-solid fa-circle-minus" id="${songId}" onclick="remove(this, ${songId})" 
                            ></i>
                            </label>
                        </div>`;

        List_Of_Song_Ids.push(songId);
        document.getElementById("List").value = List_Of_Song_Ids;
        document.getElementById(`${songId}`).style.opacity = "0.5";
        document.getElementById(`${songId}`).style.pointerEvents = "none";
        document.getElementById(`${songId}`).style.pointer = "none";

        document.getElementById("InfoValue").style.display= 'none';

        updateTableClasses();

    }

function changeGlobalVolume2(){

globalVolume = document.getElementById("volumeSlider").value;

var elements = document.getElementsByClassName("AudioClass");
var ids = Array.from(elements).map((element) => element.id);

  ids.forEach((id) => {
    document.getElementById(id).volume = globalVolume;
  });

}


function remove(button, id) {
    let row = button.closest('tr');
    
    if (row && row.rowIndex !== 0) {
        row.parentNode.removeChild(row);
        
        for (let i = 0; i < List_Of_Song_Ids.length; i++) {
            if (List_Of_Song_Ids[i] == id) {
                List_Of_Song_Ids.splice(i, 1);
                break;
            }
        }

        document.getElementById("List").value = List_Of_Song_Ids;
        document.getElementById(`${id}`).style.opacity = "1";
        document.getElementById(`${id}`).style.pointerEvents = "auto";
        document.getElementById(`${id}`).style.pointer = "cursor";

        updateTableClasses();
    }
    
}


    function updateTableClasses() {
    const table = document.getElementById("TableOfPlaylistSongs");
    const rows = table.getElementsByTagName("tr");

    for (let i = 0; i < rows.length; i++) {
        if (i % 2 === 0) {
            rows[i].classList.add("TableEven2");
            rows[i].classList.remove("TableOdd2");
        } else {
            rows[i].classList.add("TableOdd2");
            rows[i].classList.remove("TableEven2");
        }
    }

    if(List_Of_Song_Ids.length == 0){
    document.getElementById("InfoValue").style.display= 'block';
}
}

function ShowForm() {
    if(List_Of_Song_Ids.length < 1){
        Error("Playlist contains no values");
    }else{
        const formBg = document.getElementById('formPos');

        formBg.classList.remove('slideOut');
        formBg.classList.add('slideIn');
        formBg.style.zIndex = "1";  
    }
}

function HideForm(){
    const formBg = document.getElementById('formPos');

    formBg.classList.remove('slideIn');
    formBg.classList.add('slideOut');
    formBg.style.zIndex = "-1";
}

function Error(message){
    const error = document.getElementById('Error');
    document.getElementById("ErrorMessage").innerHTML = message;
    error.classList.add('slideIn');
    error.classList.remove('slideOut');

    setTimeout(() => {
        error.classList.add('slideOut');
        error.classList.remove('slideIn');
}, 3000);
    
}

function Play(id, current) {
  var audio = document.getElementById(`Song${id}`);

  if (current.className === "PlayButton active") {
    current.classList.remove('active');
    audio.pause();
  } else {
    current.classList.toggle('active');
    audio.volume = globalVolume;
    audio.play();
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

function SubmitValidation(){
    if(document.getElementById('PlaylistsName').value === ''){
        Error("Playlists Name Is Empty")
        console.log(List_Of_Song_Ids);
    }else if(List_Of_Song_Ids.length < 1){
        Error("Playlist contains no values");
    }else{
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
            document.getElementById("PlaylistCreateForm").submit();
        } else {
            console.error('Failed to update liked songs.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
}
</script>
</body>
</html>