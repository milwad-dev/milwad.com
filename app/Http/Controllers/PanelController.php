<?php

namespace App\Http\Controllers;

class PanelController extends Controller
{
    /**
     * Return panel view page.
     */
    public function __invoke()
    {
        return view('admin.panel.index');
    }
}
