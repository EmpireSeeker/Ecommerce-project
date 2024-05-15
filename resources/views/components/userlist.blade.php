<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.5.1-web/css/all.css')}}" />
    <title>Document</title>
</head>
<body>


<div class="sidebar">
    <div class="logo-details">
      <i class="fa fa"></i>
      <div class="logo_name">Access</div>
      <i class="fa fa-bars" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class="fa fa-search"></i>
        <input id="input-search" type="text" placeholder="Search" />
        <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{ url ('/admin')}}">
          <i class="fa fa-border-all"></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="{{route('userlist')}}">
          <i class="fa fa-user"></i>
          <span class="links_name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <li>
        <a href="{{url('product')}}">
          <i class="fa fa-cart-shopping"></i>
          <span class="links_name">Products</span>
        </a>
        <span class="tooltip">Products</span>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-chart-pie"></i>
          <span class="links_name">Analytics</span>
        </a>
        <span class="tooltip">Analytics</span>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-folder"></i>
          <span class="links_name">File Manager</span>
        </a>
        <span class="tooltip">Files</span>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-message"></i>
          <span class="links_name">Order</span>
        </a>
        <span class="tooltip">Order</span>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-heart"></i>
          <span class="links_name">Saved</span>
        </a>
        <span class="tooltip">Saved</span>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-gear"></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <img src="{{asset('assets/img/esaint.jpg')}}" alt="" />
          <div class="name_job">
            <div class="name">Shalom Ekpo</div>
            <div class="job">Web dev</div>
          </div>
        </div>
        <i class="fa fa-right-from-bracket" id="log_out"></i>
      </li>
    </ul>
  </div>


  <script src="{{asset('assets/js/script.js')}}"></script>
<center>
  <table>
    <thead>
        <tbody>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Registered Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
    </tbody>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->created_at}}</td>
    @endforeach

    </tbody>
</table>
</center>

</body>
</html>
