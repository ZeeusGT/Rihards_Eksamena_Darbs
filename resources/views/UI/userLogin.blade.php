<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<style>
/* https://www.youtube.com/watch?v=828Qsr7-I0g&t=4s */
/* https://www.youtube.com/watch?v=BMphVl9suxA */
/* https://www.youtube.com/watch?v=wuUSVEcK-kM */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
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
    background: #1d2b3a;
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
    color: #00dfc4;
    transform: translateX(10px) translateY(-7px);
    font-size: 0.65em;
    padding: 0 10px;
    background: #1d2b3a;
    border-left: 1px solid #00dfc4;
    border-right: 1px solid #00dfc4;
    letter-spacing: 0.2em;
}

.inputBox input.focused{
    border: 2px solid #00dfc4;
}

.inputBox input:focus ~ span {
    color: #00dfc4;
    transform: translateX(10px) translateY(-7px);
    font-size: 0.65em;
    padding: 0 10px;
    background: #1d2b3a;
    border-left: 1px solid #00dfc4;
    border-right: 1px solid #00dfc4;
    letter-spacing: 0.2em;
}

.inputBox input:focus{
    border: 2px solid #00dfc4;
}
    .button-link {
        padding: 5px 10px;
        background-color: gray;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    body{
        margin: 0;
        padding: 0;
        min-height: 100vh;
        background-color: #0c192c;
        overflow-y: hidden;
        overflow: hidden;
    }

    .container {
    position: relative;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
}

    .bubbles{
        position: relative;
        display: flex;
        filter: blur(8px);
    }
    .bubbles span{
        position: relative;
        width: 30px;
        height: 30px;
        background: #4fc3dc;
        margin: 0 4px;
        border-radius: 50%;
        box-shadow: 0 0 0 10px #4fc3dc44,
        0 0 50px #4fc3dc,
        0 0 100px #4fc3dc;
        animation: animateB 15s linear infinite;
        animation-duration: calc(300s / var(--i));
    }
    .bubbles span:nth-child(even){
        background: #ff2d75;
        box-shadow: 0 0 0 10px #ff2d7544,
        0 0 50px #ff2d75,
        0 0 100px #ff2d75;
    }

    @keyframes animateB{
        0%{
            transform: translateY(100vh) scale(0);
        }
        100%{
            transform: translateY(-10vh) scale(1);
        }
    }

    .block{
        position: relative;
        margin: 10% auto 0;
        width: 30%;
        height: 700px;
        border-radius: 3.3%;
        background: linear-gradient(180deg, #1d2b3a, #0e1821);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .block > * {
        margin-top: -20px;
    }

    .glow::before, .glow::after{
        content: '';
        position: absolute;
        left: -2px;
        top: -2px;
        border-radius: 3.3%;
        background: linear-gradient(45deg, #1d2b3a, #00595c, #00968f, #00c1a9, #00dfc4, #00c1a9, #00968f, #00595c);
        background-size: 400%;
        width: calc(100% + 5px);
        height: calc(100% + 5px);
        z-index: -2;
        animation: animate 60s linear infinite;
    }

    @keyframes animate{
        0%{
            background-position: 0 0;
        }
        50%{
            background-position: 400% 0;
        }
        100%{
            background-position: 0 0;
        }
    }

    .glow::after{
        filter: blur(30px);
        opacity: 0.99;
    }

    .buttonStyle{
        position: relative;
        background: #fff;
        top: 20px;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 1.5em;
        letter-spacing: 0.1em;
        font-weight: 400;
        padding: 10px 30px;
        transition: 0.5s;
        margin-right: 10px;
        cursor: pointer;
    }

    .buttonStyle:hover{
        background: var(--clr);
        color: var(--clr);
        letter-spacing: 0.25em;
        box-shadow: 0 0 35px var(--clr);
    }

    .buttonStyle:before{
        content: '';
        position: absolute;
        inset: 2px;
        background: #27282c;
    }

    .buttonStyle span{
        position: relative;
        z-index: 1;
    }

    .buttonStyle i{
        position: absolute;
        inset: 0;
        display: block;
    }
    
    .buttonStyle i::before{
        content: '';
        position: absolute;
        top: 0;
        left: 80%;
        width: 10px;
        height: 4px;
        background: #27282c;
        transform: translateX(-50%) skewX(325deg);
        transition: 0.5s;
    }

    .buttonStyle:hover i::before{
        width: 20px;
        left: 20%;
    }

    .buttonStyle i::after{
        content: '';
        position: absolute;
        bottom: 0;
        left: 20%;
        width: 10px;
        height: 4px;
        background: #27282c;
        transform: translateX(-50%) skewX(325deg);
        transition: 0.5s;
    }

    .buttonStyle:hover i::after{
        width: 20px;
        left: 80%;
    }

    .Error{
        transition: 0.5s;
        position: relative;
        font-size: 20px;
        letter-spacing: 0.1em;
        font-weight: 200;
        animation: animateC 5s linear forwards;
        margin-bottom: 20px;
    }

    @keyframes animateC{
        0%{
            color: #27282c;
        }
        100%{
            color: #ff1867;
            text-shadow: 0 0 10px #ff1867, 0 0 20px #ff1867, 0 0 30px #ff1867;
        }
    }

    #LoginTitle {
        position: relative;
        top: -10%;
        font-size: 40px;
        letter-spacing: 0.1em;
        font-weight: 600;
        color: #1d2b3a;
        animation: animateD 10s linear infinite;
    }

    
    @keyframes animateD{
        0%{
            color: #00dfc4;
            text-shadow: 0 0 4px #00665c, 0 0 8px #00665c, 0 0 12px #00665c;
        }
        50%{
            color: #00dfc4;
            text-shadow: 0 0 10px #00dfc4, 0 0 20px #00dfc4, 0 0 30px #00dfc4;
        }
        100%{
            color: #00dfc4;
            text-shadow: 0 0 4px #00665c, 0 0 8px #00665c, 0 0 12px #00665c;
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(0%);
        }
        to {
            opacity: 1;
            transform: translateY(-136%);
        }
    }

    @keyframes slideOut {
    from {
        opacity: 1;
        transform: translateY(-136%);
    }
    to {
        opacity: 0;
        transform: translateY(0%);
    }
}

    #EmailForm {
        animation: slideIn 1s forwards;
        z-index: 1;
    }

    .pop {
    position: relative;
    z-index: 1;
    overflow: hidden;
    margin: 10% auto 0;
    max-width: 30%;
    height: 700px;
    border-radius: 3.3%;
    background: linear-gradient(180deg, #1d2b3a, #0e1821);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 7% 7%;
    display: none;
}

    #ResetTitle {
    position: relative;
    top: -10%;
    font-size: 40px;
    letter-spacing: 0.1em;
    font-weight: 600;
    color: #ff2d75; /* Adjusted reddish color */
    animation: animateE 6s linear infinite;
}

@keyframes animateE {
    0%{
            color: #800020;
            text-shadow: 0 0 4px #800020, 0 0 8px #800020, 0 0 12px #800020;
        }
        50%{
            color: #880808;
            text-shadow: 0 0 15px #880808, 0 0 25px #880808, 0 0 35px #880808;
        }
        100%{
            color: #800020;
            text-shadow: 0 0 4px #800020, 0 0 8px #800020, 0 0 12px #800020;
        }
}

.Success{
        transition: 0.5s;
        position: relative;
        font-size: 20px;
        letter-spacing: 0.1em;
        font-weight: 200;
        animation: animateF 5s linear forwards;
        margin-bottom: 20px;
}
    @keyframes animateF{
        0%{
            color: #50C878;
        }
        100%{
            color: #39FF14;
            text-shadow: 0 0 10px #39FF14, 0 0 20px #39FF14, 0 0 30px #39FF14;
        }
    }


</style>
<div class="container">
    <div class="bubbles">
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:28;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:28;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:28;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:28;"></span>
    </div>
<div class="block glow">
<p id="LoginTitle">Login</p>

@if(session('success'))
    <div class="Success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    @foreach ($errors->all() as $error)
    <div class="Error">
        <ul>
            <li>{{ $error }}</li>
        </ul>
    </div>
    @endforeach
@endif


<form id="Login_Form" method='POST' action="{{ route('songs.loginUser') }}">
    @csrf
    @method('POST')
    <div class="inputBox">
        <input type='text' id="input_username" onchange="freezeAnimation('input_username')" name="username"></input>
        <span>Username</span>
    </div>
    <div class="inputBox">
        <input type='password' id="input_password" onchange="freezeAnimation('input_password')" name="password"></input>
        <span>Password</span>
    </div>
    <div>
        <a href="#" id="ForgotHref" onclick="ShowEmailForm()" return false;>Forgot Your Password?</a>
    </div>
    <div>
        <a class="buttonStyle" style="--clr: #ff1867" href="{{ route('songs.register')}}"><span>Register</span><i></i></a>
        <a class="buttonStyle" style="--clr: #6eff3e" onclick="submitForm()" type='submit'><span>Login</span><i></i></a>
    </div>
</form>
</div>
<div id="EmailForm" style="display: none;" class="pop">
    <form id="EmailSubmit" class="email-form"method='POST' action="{{ route('mail') }}">
    @csrf
    @method('POST')
    <div>
    <p id="ResetTitle">Password Reset</p>
    </div>
    <div class="inputBox">
        <input type='text' name="email"></input>
        <span>E-Mail</span>
    </div>
    <div>
    <a class="buttonStyle" style="--clr: #ff1867" onclick="HideEmailForm()"><span>Return</span><i></i></a>
    <a class="buttonStyle" style="--clr: #6eff3e" onclick="submitForm2()"><span>Submit</span><i></i></a>
    </div>
    </form>
</div>
</body>

<script>

function ShowEmailForm() {
    document.getElementById('EmailForm').style.display = 'block';
    document.getElementById('EmailForm').style.animation = 'slideIn 1s forwards';
}

function HideEmailForm() {
    document.getElementById('EmailForm').style.animation = 'slideOut 1s forwards';
    document.getElementById('ForgotHref').style.pointerEvents = 'none';
    setTimeout(function () {
        document.getElementById('EmailForm').style.display = 'none';
        document.getElementById('ForgotHref').style.pointerEvents = '';
    }, 1000);
}

function submitForm() {
    document.getElementById("Login_Form").submit();
}

function submitForm2() {
    document.getElementById("EmailSubmit").submit();
}

function freezeAnimation(id) {
    const inputElement = document.getElementById(id);

        if (inputElement.value !== "") {
            inputElement.classList.add("focused");
        } else {
            inputElement.classList.remove("focused");
        }
}

</script>

</html>