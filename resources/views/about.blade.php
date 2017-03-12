@extends("layouts.layout")

@section("title")
    About
@endsection

@section("content")
    <div class="section no-pad-bot" id="index-banner">
        <br><br>
        <h1 class="header center orange-text">
            About This Website
        </h1>
        <div class="row center">
            <h5 class="header col s12 light">
                Simple tools to assist customers in requesting a HWID reset for the Pandora client.
            </h5>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <p class="flow-text center">
                Created by <a href="https://inventor02.me">inventor02</a> and <a
                        href="https://github.com/inventor02/hwid.inventor02.me">open-sourced</a> for everyone, <strong>hwid.inventor02.me</strong>
                is a simple utility for customers of the Pandora client to get their hardware ID problem fixed quicker.
                It's licensed under the <a href="{{ url("/license") }}">GNU General Public License 3.0</a>.
            </p>
        </div>

        <div class="row center">
            <a href="{{ url("/go") }}" class="btn-large waves-effect waves-light orange">Get Started</a>
        </div>
    </div>
@endsection