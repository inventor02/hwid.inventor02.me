@extends("layouts.layout")

@section("title")
    Home
@endsection

@section("content")
    <div class="section no-pad-bot" id="index-banner">
        <br><br>
        <h1 class="header center orange-text">
            inventor02's HWID Tools
        </h1>
        <div class="row center">
            <h5 class="header col s12 light">
                Simple tools to assist customers in requesting a HWID reset for the Pandora client.
            </h5>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">done</i></h2>
                    <h5 class="center">
                        Get the info
                    </h5>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">done</i></h2>
                    <h5 class="center">
                        Get the details
                    </h5>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">done</i></h2>
                    <h5 class="center">
                        Get the instructions
                    </h5>
                </div>
            </div>
        </div>

        <div class="row center">
            <a href="{{ url("/go") }}" class="btn-large waves-effect waves-light orange">Get Started</a>
        </div>
    </div>
@endsection