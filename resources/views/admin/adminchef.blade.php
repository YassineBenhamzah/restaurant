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
<form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">Name</label>
        <input style="color: blue" type="text" name="name" placeholder="Enter Name" required>
    </div>
    <div>
        <label for="">Specialty</label>
        <input style="color: blue" type="text" name="speciality" placeholder="Enter the Specialty" required>
    </div>
    <div>
        <label for="">Image</label>
        <input  type="file" name="image"  required>
    </div>
    <div>
        <input type="submit" value="Save" class="btn btn-primary">
    </div>
</form>
<div>
<table bgcolor="black">
   <tr>
    <th style="padding-right: 30px;">Chef Name</th>
    <th style="padding-right: 30px;">Speciality</th>
    <th style="padding-right: 30px;">image</th>
    <th style="padding-right: 30px;">Action</th>
    <th style="padding-right: 30px;">Action2</th>
   </tr>
   @foreach ($data as $data)
   <tr align="center">
    <td>{{$data->name}}</td>
    <td>{{$data->speciality}}</td>
    <td><img height="100" width="100" src="/chefimage/{{$data->image}}" alt=""></td>
    <td><a href="{{url('/updatechef' , $data->id)}}">update</a></td>
    <td><a href="{{url('/deletechef' , $data->id)}}">delete</a></td>
   </tr>
   @endforeach
</table>
</div>
    </div>
    <!-- container-scroller -->
    @include('admin.adminjs')
  </body>
</html>
