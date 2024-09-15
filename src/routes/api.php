<?php
use Illuminate\Support\Facades\Route;

Route::get("/testpackage", function(){
    return response("Package Api Working...");//->json(["status" => 200, "message" => "Package Api Working..."]);
});