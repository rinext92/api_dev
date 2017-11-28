@extends('dev.layout.app')
@section('content')
<div id="content">
<!--breadcrumbs-->
<div id="content-header">
  <div id="breadcrumb">
    <a href="{{ url('dev/v1/') }}" title="Go to Home" class="tip-bottom">
      <i class="icon-home"></i> Home
    </a>
    <a href="{{ url('dev/v1/API-list') }}" class="current">API List</a>
  </div>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">

          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>API List Table</h5>
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
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
<!--End-Action boxes-->

</div>
@endsection
