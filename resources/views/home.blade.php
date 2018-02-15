@extends ("layout")

@section("title","tango")

@section("body")

    <div class="ui grid">
        <div class ="twelve wide column">
            <img src="img/tango_banner.jpg">
        </div>
        <div class = "right floated two wide column">
            <br>
            <br>
            <a href="/signin" class="ui inverted green button">Sign In</a><br>
            <br>
            <a href="/signup" class="ui inverted green button">Sign Up</a>
        </div>
    </div>

    @if(session("registered_status"))
        <div class="ui success message">
            <center>You are registered successfully. Sign in now!</center>
        </div>
    @endif
@endsection


