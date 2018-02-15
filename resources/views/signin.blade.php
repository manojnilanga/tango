@extends ("layout")

@section("title","signin")

@section("body")

    <div class="ui grid">
        <div class ="twelve wide column">
            <img src="img/tango_banner.jpg">
        </div>
        <div class = "right floated two wide column">
            <br>
            <br>
            <br>
            <a href="/" class="ui inverted green button">Home</a>
        </div>
    </div>

    <form class="ui form" action="{{route("signin")}}" method="post">
        {{csrf_field()}}
        <div class="ui grid">

                <div class="five wide column"></div>
                <br>
                <div class="six wide column">
                    <h3><center>Sign in</center></h3>
                    <div class="field">
                        <input type="text" name="username" value="{{old("username")}}" placeholder="Username">
                    </div>
                    <div class="field">
                        <input type="password" name="password" value="{{old("password")}}" placeholder="Password">
                    </div>
                    <div align="right">
                        <button class="ui button" type="submit" >Sign In</button>
                    </div>
                </div>

        </div>
    </form>