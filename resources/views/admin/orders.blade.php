<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
@include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
@include('admin.navbar')
<div class="container">
<h1>customers</h1>

<form action="{{url('/search')}}" method="GET">
    <input type="text" name="search" style="color: blue;">
    <input type="submit" value="Search" class="btn btn-success">
</form>



<table>
    <tr align="center">
        <th style="padding: 30px;">Name</th>
        <th style="padding: 30px;">Phone</th>
        <th style="padding: 30px;">Adress</th>
        <th style="padding: 30px;">Food Name</th>
        <th style="padding: 30px;">Quantity</th>
        <th style="padding: 30px;">Price</th>
        <th style="padding: 30px;">Total Price</th>
    </tr>
    @foreach ($data as $data)
    <tr align="center" style="background-color: black;">
        <td>{{$data->name}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->foodname}}</td>
        <td>{{$data->quantity}}</td>
        <td>{{$data->price}}</td>
        <td>{{-- {{$data->price * $data->quantity}} --}}</td>
    </tr>
    @endforeach
</table>
</div>
</div>
    <!-- container-scroller -->
    @include('admin.adminjs')
  </body>
</html>
