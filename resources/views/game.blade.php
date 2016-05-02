@extends('layouts.app')
@section('content')
<!-- POPUP -->
<div class="cover">
    <div class="cover-content">
        <hr align="center" width="90%">
        <label class="winner"></label>
        <br>
        <a type="button" class="close-win-window"><span style="color: #f0ad4e;" class="glyphicon glyphicon-fire fire"></span></a>
        <hr align="center" width="90%">
    </div>
    <div class="list-content">
        Yoy! <br>You can change your pawn to something more cool :
        <hr align="center" width="90%" style="margin-bottom: 5px;color: darkgray">
        <div class="alert alert-warning warn-alert" role="alert">
            <button type="button" class="close alert-button"><span aria-hidden="true">&times;</span></button>
            You should choose something!
        </div>
        <div align="left" class="col-xs-5 col-xs-offset-1">
            <div class="checkbox">
                <label>
                    <input class="custom" id="bishop" type="checkbox" value="">
                    bishop
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="custom" id="knight" type="checkbox" value="">
                    knight
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="custom" id="queen" type="checkbox" value="">
                    queen
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="custom" id="rook" type="checkbox" value="">
                     rook
                </label>
            </div>
        </div>
        <div class="col-xs-6" style="position: absolute;top: 40%; left: 40%;">
            <img src="img/stars.png" width="70%">
        </div>
        <div class="accept-figure"><button class="accept btn btn-default">change</button></div>
    </div>
</div>
<!-- end POPUP-->
<div class="container main">
    <div class="row">
        <div class="col-xs-12 header">
        </div>
    </div>
    <div class="row content">
        <input type="hidden" class="game-info" data-game="34">
        <div class="col-md-7 col-xs-12 board">
            <div class="row user1">
                <div class="col-xs-offset-1 user col-md-3 col-xs-4">
                    <img height="70%" src="img/Moderator%20Filled-50.png"> <i id="white-user-info"></i>
                </div>
                <div align="right" class="hit-white col-md-7 col-xs-6"></div>
            </div>
            <div class="row">
                <div class="col-xs-1">
                </div>
                <div class="col-xs-1 cell-parent cell-corner">
                    <div class="cell-side-left"></div>
                </div>
                <div class="col-xs-1 cell-bottom" id="letter1">A</div>
                <div class="col-xs-1 cell-bottom" id="letter2">B</div>
                <div class="col-xs-1 cell-bottom" id="letter3">C</div>
                <div class="col-xs-1 cell-bottom" id="letter4">D</div>
                <div class="col-xs-1 cell-bottom" id="letter5">E</div>
                <div class="col-xs-1 cell-bottom" id="letter6">F</div>
                <div class="col-xs-1 cell-bottom" id="letter7">G</div>
                <div class="col-xs-1 cell-bottom" id="letter8">H</div>
                <div class="col-xs-1 cell-parent cell-corner">
                    <div class="cell-side-right"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1 cell cell-parent">
                    <div class="cell-side-left">8</div>
                </div>
                <div class="col-xs-1 cell light" id="11">
                </div>
                <div class="col-xs-1 cell dark" id="12">
                </div>
                <div class="col-xs-1 cell light" id="13">
                </div>
                <div class="col-xs-1 cell dark" id="14">
                </div>
                <div class="col-xs-1 cell light" id="15">
                </div>
                <div class="col-xs-1 cell dark" id="16">
                </div>
                <div class="col-xs-1 cell light" id="17">
                </div>
                <div class="col-xs-1 cell dark" id="18">
                </div>
                <div class="col-xs-1 cell cell-parent">
                    <div class="cell-side-right">8</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1 cell cell-parent">
                    <div class="cell-side-left">7</div>
                </div>
                <div class="col-xs-1 cell dark" id="21">
                </div>
                <div class="col-xs-1 cell light" id="22">
                </div>
                <div class="col-xs-1 cell dark" id="23">
                </div>
                <div class="col-xs-1 cell light" id="24">
                </div>
                <div class="col-xs-1 cell dark" id="25">
                </div>
                <div class="col-xs-1 cell light" id="26">
                </div>
                <div class="col-xs-1 cell dark" id="27">
                </div>
                <div class="col-xs-1 cell light" id="28">
                </div>
                <div class="col-xs-1 cell cell-parent">
                    <div class="cell-side-right">7</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1 cell cell-parent">
                    <div class="cell-side-left">6</div>
                </div>
                <div class="col-xs-1 cell light" id="31"></div>
                <div class="col-xs-1 cell dark" id="32"></div>
                <div class="col-xs-1 cell light" id="33"></div>
                <div class="col-xs-1 cell dark" id="34"></div>
                <div class="col-xs-1 cell light" id="35"></div>
                <div class="col-xs-1 cell dark" id="36"></div>
                <div class="col-xs-1 cell light" id="37"></div>
                <div class="col-xs-1 cell dark" id="38"></div>
                <div class="col-xs-1 cell cell-parent">
                    <div class="cell-side-right">6</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1 cell cell-parent">
                    <div class="cell-side-left">5</div>
                </div>
                <div class="col-xs-1 cell dark" id="41"></div>
                <div class="col-xs-1 cell light" id="42"></div>
                <div class="col-xs-1 cell dark" id="43"></div>
                <div class="col-xs-1 cell light" id="44"></div>
                <div class="col-xs-1 cell dark" id="45"></div>
                <div class="col-xs-1 cell light" id="46"></div>
                <div class="col-xs-1 cell dark" id="47"></div>
                <div class="col-xs-1 cell light" id="48"></div>
                <div class="col-xs-1 cell cell-parent">
                    <div class="cell-side-right">5</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1 cell cell-parent">
                    <div class="cell-side-left">4</div>
                </div>
                <div class="col-xs-1 cell light" id="51"></div>
                <div class="col-xs-1 cell dark" id="52"></div>
                <div class="col-xs-1 cell light" id="53"></div>
                <div class="col-xs-1 cell dark" id="54"></div>
                <div class="col-xs-1 cell light" id="55"></div>
                <div class="col-xs-1 cell dark" id="56"></div>
                <div class="col-xs-1 cell light" id="57"></div>
                <div class="col-xs-1 cell dark" id="58"></div>
                <div class="col-xs-1 cell cell-parent">
                    <div class="cell-side-right">4</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1 cell cell-parent">
                    <div class="cell-side-left">3</div>
                </div>
                <div class="col-xs-1 cell dark" id="61"></div>
                <div class="col-xs-1 cell light" id="62"></div>
                <div class="col-xs-1 cell dark" id="63"></div>
                <div class="col-xs-1 cell light" id="64"></div>
                <div class="col-xs-1 cell dark" id="65"></div>
                <div class="col-xs-1 cell light" id="66"></div>
                <div class="col-xs-1 cell dark" id="67"></div>
                <div class="col-xs-1 cell light" id="68"></div>
                <div class="col-xs-1 cell cell-parent">
                    <div class="cell-side-right">3</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1 cell cell-parent">
                    <div class="cell-side-left">2</div>
                </div>
                <div class="col-xs-1 cell light" id="71">
                </div>
                <div class="col-xs-1 cell dark" id="72">
                </div>
                <div class="col-xs-1 cell light" id="73">
                </div>
                <div class="col-xs-1 cell dark" id="74">
                </div>
                <div class="col-xs-1 cell light" id="75">
                </div>
                <div class="col-xs-1 cell dark" id="76">
                </div>
                <div class="col-xs-1 cell light" id="77">
                </div>
                <div class="col-xs-1 cell dark" id="78">
                </div>
                <div class="col-xs-1 cell cell-parent">
                    <div class="cell-side-right">2</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1 cell cell-parent">
                    <div class="cell-side-left">1</div>
                </div>
                <div class="col-xs-1 cell dark" id="81">
                </div>
                <div class="col-xs-1 cell light" id="82">
                </div>
                <div class="col-xs-1 cell dark" id="83">
                </div>
                <div class="col-xs-1 cell light" id="84">
                </div>
                <div class="col-xs-1 cell dark" id="85">
                </div>
                <div class="col-xs-1 cell light" id="86">
                </div>
                <div class="col-xs-1 cell dark" id="87">
                </div>
                <div class="col-xs-1 cell light" id="88">
                </div>
                <div class="col-xs-1 cell cell-parent">
                    <div class="cell-side-right">1</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1 cell-parent cell-corner">
                    <div class="cell-side-left"></div>
                </div>
                <div class="col-xs-1 cell-up">A</div>
                <div class="col-xs-1 cell-up">B</div>
                <div class="col-xs-1 cell-up">C</div>
                <div class="col-xs-1 cell-up">D</div>
                <div class="col-xs-1 cell-up">E</div>
                <div class="col-xs-1 cell-up">F</div>
                <div class="col-xs-1 cell-up">G</div>
                <div class="col-xs-1 cell-up">H</div>
                <div class="col-xs-1 cell-parent cell-corner">
                    <div class="cell-side-right"></div>
                </div>
            </div>
            <div class="user2 row">
                <div class="col-md-7 col-xs-6 col-xs-offset-1 hit-black col-md-offset-1"></div>
                <div align="right" class="col-md-3 col-xs-4 user">
                    <i id="black-user-info"></i> <img height="70%" src="img/Moderator-50.png">
                </div>
            </div>
        </div>
        <div style="font-size: 24pt" class="col-md-5 col-xs-12 bar">
            <div class="row">
                <div class="col-xs-12 side-header">

                </div>
                <div class=" col-xs-12 side-bar">
                    <div class="row info-board">
                        <div class="col-xs-12 info-header">
                                Info Board
                        </div>
                        <div class="col-xs-6 status center">
                            <b class="state">BLACK IN GAME</b>
                        </div>
                        <div class="col-xs-6 last">
                            <label class="current-step"></label>
                        </div>
                        <div class="col-xs-12 log center">
                            <i class="history"></i>
                        </div>
                    </div>
                    <br>
                    <button style="font-size: 26pt;margin-bottom: 10px" class="col-xs-offset-9 giveUp btn btn-danger">
                        give up
                    </button>
                </div>
                <br>
            </div>
        </div>
        </div>
    <div class="footer">

    </div>
</div>
@endsection
@section('scripts')
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/app.js"></script>
<script src="/js/reconnecting-websocket.min.js"></script>
<script data-main="/js/main.js" src="/js/require.min.js"></script>
@endsection
