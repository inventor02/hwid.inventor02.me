<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index() {
        return view("form");
    }

    public function submit(Request $request) {
        $validator = Validator::make($request->all(), [
            "username" => "required|max:16"
        ]);

        if($validator->fails()) {
            return redirect("/go")
                ->withErrors($validator)
                ->withInput();
        }

        if(Cache::get(strtolower($request->username)) != null) {

            $client = new Client();
            $res = $client->request("GET", "https://api.mojang.com/users/profiles/minecraft/" . urlencode($request->username), [
                "User-Agent" => "inventor02 HWID Tools (GuzzleHttp 6.2; Laravel 5.4; PHP 7.0)"
            ]);

            if($res->getStatusCode() == 204) {
                $validator->errors()->add("username", "According to Mojang, this username is invalid. Please check your spelling.");

                return redirect("/go")
                    ->withErrors($validator)
                    ->withInput();
            }

            if($res->getStatusCode() != 200) {
                $validator->errors()->add("api_response_code", "The Mojang API returned a nonstandard response code. Please try again later.");

                return redirect("/go")
                    ->withErrors($validator)
                    ->withInput();
            }

            $json = json_decode($res->getBody(), true);
            $uuid = $json["id"];

            Cache::put(strtolower($request->username), $uuid, 5);
        } else {
            $uuid = Cache::get(strtolower($request->username));
        }

        return view("steps", [
            "uuid" => $uuid
        ]);
    }
}
