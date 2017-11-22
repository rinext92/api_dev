<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li {{{ (Request::is('dev/v1') ? 'class=active' : '') }}}>
      <a href="{{ url('dev/v1/') }}"><i class="icon icon-home"></i>
        <span>Dashboard</span></a>
    </li>
    <li {{{ (Request::is('dev/v1/user-list') ? 'class=active' : '') }}}>
      <a href="{{ url('dev/v1/user-list') }}"><i class="icon icon-user"></i>
        <span>User List</span></a>
    </li>
    <li {{{ (Request::is('dev/v1/activity-logs') ? 'class=active' : '') }}}>
      <a href="{{ url('dev/v1/activity-logs') }}"><i class="icon icon-user"></i>
        <span>Activity Logs</span></a>
    </li>
    <li {{{ (Request::is('dev/v1/API-list') ? 'class=active' : '') }}}>
      <a href="{{ url('dev/v1/API-list') }}"><i class="icon-list-ul"></i>
        <span>API List</span></a>
    </li>
  </ul>
</div>
