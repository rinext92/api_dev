@extends('dev.layout.app')
@section('content')
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
      <a href="{{ url('dev/v1/') }}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home
      </a>
      <a href="{{ url('dev/v1/user-list') }}" class="current">User List</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">

          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>User Table</h5>
          </div>

          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $key => $user)
                  <tr>
                    <td style="text-align:center">{{ $key + 1}}</td>
                    <td>{{ $user->username}}</td>
                    <td>{{ $user->fullname}}</td>
                    <td>{{ $user->email}}</td>
                    <td style="text-align:center">
                        @if($user->active == '1')
                           <span class="icon"> <i class="icon-ok" style="color:green"></i> </span>
                        @else
                          <span class="icon"> <i class="icon-remove-sign" style="color:red"></i> </span>
                        @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
