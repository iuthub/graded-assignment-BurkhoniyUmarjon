@extends('layouts.master')
@section('content')
<ul id="myUL">
          <li>
            <div class="task">
                BMW
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
          <li>
            <div class="task">
               MERCEDES-BENZ
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
          <li>
            <div class="task">
               FERRARI
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
        </ul>
        @endsection