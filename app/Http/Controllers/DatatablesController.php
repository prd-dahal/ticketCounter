<?php
use Yajra\Datatables\Datatables;
namespace App\Http\Controllers;
use App\ticketUser;
use Illuminate\Http\Request;

class DatatablesController extends Controller
{
    public funtion ticketUser(){
    	return Datatables::of(ticketUser::query())->make(true);
    }
}
