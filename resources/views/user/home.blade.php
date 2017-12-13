@extends("layouts.main")

@section("title", "Login")

@section("content")
<div id="wrapper">
    <div id="menuUser">
        <div class="navbar navbar-inverse navbar-fixed-left">
            <a class="navbar-brand" href="#">
                {{ Auth::user()->name }}
            </a>
            <ul class="nav navbar-nav">
               <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Sub Menu1</a></li>
                        <li><a href="#">Sub Menu2</a></li>
                        <li><a href="#">Sub Menu3</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sub Menu4</a></li>
                        <li><a href="#">Sub Menu5</a></li>
                    </ul>
                </li>-->
                <li><a href="#">Alcance 1</a></li>
                <li><a href="#">Alcance 2</a></li>
                <li><a href="#">Alcance 3</a></li>

            </ul>
        </div>
    </div><!--menuUser-->


    <div id="formularioUser">

        @include("forms.user.alcance1")

    </div>
</div><!--wrapper-->


@endsection