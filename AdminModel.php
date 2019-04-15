<?php

class AdminModel
{
    public function __constructor()
    {
        // Code
    }

    public function edit()
    {
        return view('admin.edit');
    }
    public function index()
    {
        return view('admin.index');
    }

    protected function someMethod()
    {
        // code
    }
}
