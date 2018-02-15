@extends ("layout")

@section("title","signup")

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

    <form class="ui form" action="{{route("signup")}}" method="post">
        {{csrf_field()}}
        <div class="ui grid">
            <div class="column"></div>
            <div class="fourteen wide column">
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="ui negative message">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <h4 >Personal Information </h4>
                <div class="field">
                    <label>Name</label>
                    <div class="two fields">
                        <div class="field">
                            <input type="text" name="first_name" value="{{old("first_name")}}" placeholder="First Name">
                        </div>
                        <div class="field">
                            <input type="text" name="last_name" value="{{old("last_name")}}" placeholder="Last Name">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Address</label>
                    <div class="field">
                        <input type="text" name="address" value="{{old("address")}}" placeholder="Personal address">
                    </div>
                </div>
                <div class="fields">
                    <div class="ten wide field">
                        <label>E-mail</label>
                        <input type="text" name="email" value="{{old("email")}}" placeholder="E-mail">
                    </div>
                    <div class="six wide field">
                        <label>Phone number</label>
                        <input type="text" name="phone_number" value="{{old("phone_number")}}" placeholder="Phone number">
                    </div>
                </div>
                <h4 >Sign in information </h4>
                <div class="six wide field">
                    <label>Username</label>
                    <div class="field">
                        <input type="text" name="username" value="{{old("username")}}" placeholder="Username for sign in">
                    </div>
                    <label>Password</label>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password">
                    </div>


                    <div class="field">
                        <input type="password" name="password_confirmation" placeholder="Re enter password">
                    </div>

                </div>
                <button class="ui button" type="submit" >Sign Up</button>
            </div>

        </div>


    </form>

{{--    <form action="{{route("signup")}}" method="post">
        {{csrf_field()}}
        First name: <input type="text" name="fname"><br>
        Last name: <input type="text" name="lname"><br>
        <input type="submit" value="Submit">
    </form>--}}


 {{--   <input type="text" name="first_name" placeholder="first_name">
    <input type="text" name="last_name" placeholder="last_name">
    <input type="text" name="address" placeholder="address">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="phone_number" placeholder="phone_number">
    <input type="text" name="username" placeholder="username">
    <input type="text" name="password" placeholder="password">
    <button class="ui button" type="submit" >Sign Up</button>--}}
@endsection

