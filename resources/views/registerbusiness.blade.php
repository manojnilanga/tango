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
                <h4 >Business Information </h4>
                <div class="fields">
                    <div class=" ten wide field">
                        <label>Business Name</label>
                        <input type="text" name="business_name" value="{{old("business_name")}}" placeholder="business_name">
                    </div>
                    <div class="six wide field">
                        <label>Business Type</label>
                        <select class="ui dropdown" name="business_type">
                            <option value="">Other</option>
                            <option value="0">Food</option>
                            <option value="1">Clothes</option>
                            <option value="2">Sports</option>
                            <option value="3">Other</option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <div class="field">
                        <label>Business Description</label>
                        <textarea placeholder="Business Description" value="{{old("Business Description")}}"></textarea>
                    </div>
                </div>
                <div class="fields">
                    <div class=" fourteen wide field">
                        <label>Business Address</label>
                        <input type="text" name="business_address" value="{{old("business_address")}}" placeholder="Business Address">
                    </div>
                    <div class="two wide field">
                        <label>Starting year</label>
                        <input type="text" name="starting_year" value="{{old("starting_year")}}" placeholder="year">
                    </div>
                </div>
                <div class="fields">
                    <div class=" twelve wide field">
                        <label>Business Website</label>
                        <input type="text" name="business_website" value="{{old("business_website")}}" placeholder="Business Website">
                    </div>
                    <div class="four wide field">
                        <label>Business Hotline</label>
                        <input type="text" name="business_hotline" value="{{old("business_hotline")}}" placeholder="Telephone Number">
                    </div>
                </div>
                <div class="field">
                    <label>Business Photoes</label>
                    <div>
                        <label for="file" class="ui icon button">
                            <i class="file icon"></i>
                            Open File</label>
                        <input type="file" id="file" style="display:none">
                    </div>
                    <br>
                    <button class="ui button" type="submit" >Register Business Now</button>
                </div>
            </div>
        </div>
    </form>