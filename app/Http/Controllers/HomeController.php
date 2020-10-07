<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function listOrderHQ()
    {
        return view('pages.Admin.Orders.ListOrderHQ');
    }

    public function listOrderTeam()
    {
        return view('pages.Admin.Orders.ListOrderTeam');
    }

    public function deletedOrder()
    {
        return view('pages.Admin.Orders.DeletedOrder');
    }

    public function ListProducts()
    {
        return view('pages.Admin.Products.ListProduct');
    }

    public function AddProducts()
    {
        return view('pages.Admin.Products.AddProduct');
    }

    public function ListTeam()
    {
        return view('pages.Admin.Teams.ListTeam');
    }

    public function Genelogy()
    {
        return view('pages.Admin.Teams.Genelogy');
    }

    public function Roles()
    {
        return view('pages.Admin.Teams.Roles');
    }

    public function NewApplication()
    {
        return view('pages.Admin.Teams.NewApplication');
    }

    public function Territory()
    {
        return view('pages.Admin.Teams.Territory');
    }

    public function State()
    {
        return view('pages.Admin.Teams.State');
    }
}
