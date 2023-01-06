<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return 'this is index';
    }
    
    public function show() {
        return 'show function is running';
    }

    public function store(Request $req) {
        return 'store function is running';
    }

    public function update() {
        return 'update function is runnig';
    }

    public function destroy() {
        return 'destroy function is running';
    }
}
