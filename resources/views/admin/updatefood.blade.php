<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
@include('admin.admincss')

  </head>
  <body>
    <div class="container-scroller">
@include('admin.navbar')
<div style="position: relative; top:60px; right:-150px">
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

@csrf
        <div>
            <label for="">Title</label>
            <input style="color: black;" type="text" name="title" value="{{$data->title}}" required>
        </div>
        <div>
            <label for="">Price</label>
            <input style="color: black;" type="text" name="price" value="{{$data->price}}" required>
        </div>
        <div>
            <label for="">Description</label>
            <input style="color: black;" type="text" name="description" value="{{$data->description}}" required>
        </div>
        <div>
            <label for="">Old Image</label>
            <img src="/foodimage/{{$data->image}}" alt="" height="80" width="80">
        </div>
        <div>
            <label for="">New Image</label>
            <input type="file" name="image"  required>
        </div>
        <div>

            <input style="" type="submit" value="Save" class="btn btn-primary" >
        </div>

    </form>
    </div>
    <!-- container-scroller -->
    @include('admin.adminjs')
  </body>
</html>
