<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
<base href="/public">
@include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
@include('admin.navbar')
<form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">Chef Name</label>
        <input style="color: blue;" type="text" name="name" value="{{$data->name}}">
    </div>
    <div>
        <label for="">Chef Speaciality</label>
        <input style="color: blue;" type="text" name="speciality" value="{{$data->speciality}}">
    </div>
    <div>
        <label for="">Old image</label>
       <img height="300" width="300" src="/chefimage/{{$data->image}}" alt="">
    </div>
    <div>
        <label for="">New image</label>
      <input type="file" name="image" id="" >
    </div>

    <div>
        <input  type="submit" value="updatechef" required class="btn btn-primary">
    </div>

</form>
    </div>
    <!-- container-scroller -->
    @include('admin.adminjs')
  </body>
</html>
