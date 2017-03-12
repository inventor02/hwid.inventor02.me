@extends("layouts.layout")

@section("title")
    Instructions
@endsection

@section("content")
    <div class="section no-pad-bot" id="index-banner">
        <br><br>
        <h1 class="header center orange-text">
            Great success!
        </h1>
        <div class="row center">
            <h5 class="header col s12 light">
                Here are your steps to submit your HWID reset!
            </h5>
        </div>

        <div class="row">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">
                            Step One
                        </span>

                        <p>
                            Head over to <a href="https://pandoraclient.com/hwid/new" target="_blank">pandoraclient.com/hwid/new</a>
                            and get ready to enter some information. You may need to login, if prompted, do so with your
                            Pandora account.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <span class="card-title">
                            Step Two
                        </span>

                        <p>
                            For the "Reason", select <code>Requested by staff</code> and enter <code>{{ $uuid }}</code>
                            as your UUID.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <span class="card-title">
                            Step Three
                        </span>

                        <p>
                            Press submit and let the staff member who sent you here know! You're done!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection