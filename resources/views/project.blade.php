@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
<main role="main" class="col-md-12 m-sm-auto col-lg-12 pt-3 px-2">
@if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

<div class="card" style="margin-top:5px ;">
<div class="card-body">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p-2 mb-3 border-bottom" style="background-color: rgba(0, 0, 0, 0.05);">
            <h1 class="h2">List of Hana Systems</h1>
            <div class="row" style="margin-right:10px">
              <div class="col">
            <button class="btn-primary btn-sm btn-outline-secondary" style="display:inline-flexbox; margin-top:10px; border:solid black 1px">
            </button>
            </div>
            <div col="lenght:300px;" >
            <form class="input-group" style="margin-top:8px; " action="#" method="$_GET">
              @csrf
                  <input type="search" name="searchtable" class="form-control rounded" placeholder="Search SID" aria-label="Search"
                    aria-describedby="search-addon" />
                  <button type="submit" class="btn btn-outline-primary" style="margin-bottom:5px;">Search</button>  
            </form>
            </div>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-bordered table-sm" >
              <thead style="text-align: center;">
                <tr style="justify-content: space-between;">
                  <th>SID</th>
                  <th >Landscape</th>
                  <th>Category</th>
                  <th style="white-space: nowrap">ID</th>
                  <th style="white-space: nowrap">NAME</th>
                  <th>Felelős</th>
                </tr>
              </thead>
              <tbody style="text-align: center;"> 
              @foreach($users as $user)
                <tr style="justify-content: space-between;">
                  <td >{{$user-> id}}</td>
                  <td style=" word-break: break-word;">{{$user->name}}</td>
                @endforeach
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
    </div>
    </div>




</div>
@endsection