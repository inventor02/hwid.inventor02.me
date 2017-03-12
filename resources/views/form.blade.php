@extends("layouts.layout")

@section("title")
    Get Started
@endsection

@section("content")
    <div class="section no-pad-bot" id="index-banner">
        <br><br>
        <h1 class="header center orange-text">
            Get Started
        </h1>
        <div class="row center">
            <h5 class="header col s12 light">
                Fill in the info below and we'll tell you how to submit your HWID reset!
            </h5>
        </div>
    </div>

    <div class="container">
        @if(count($errors) > 0)
            <div class="row">
                <div class="col s8 offset-s2">
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Your input contains errors!</h4></li>
                        @foreach($errors->all() as $error)
                            <li class="collection-item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="row">
            <form method="POST" class="col s8 offset-s2">
                {{ csrf_field() }}

                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input placeholder="inventor02" id="username" name="username" type="text" class="validate">
                    <label for="mc_username">Minecraft Username</label>
                </div>

                <div class="center">
                    <button type="submit" class="btn waves-effect waves-orange orange">
                        Get My Instructions
                    </button>
                    <h6 class="orange-text">Results are cached for 5 minutes.</h6>
                </div>
            </form>
        </div>
    </div>
@endsection
