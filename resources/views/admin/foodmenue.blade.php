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
<div style="position: relative; top:60px; right:-150px">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
@csrf_field
        <div>
            <label for="">Title</label>
            <input style="color: black;" type="text" name="title" placeholder="Write a title" required>
        </div>
        <div>
            <label for="">Price</label>
            <input style="color: black;" type="text" name="price" placeholder="Write a Price" required>
        </div>
        <div>
            <label for="">Description</label>
            <input style="color: black;" type="text" name="description" placeholder="Write a Description" required>
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="image"  required>
        </div>
        <div>

            <input style="" type="submit" value="Save" class="btn btn-primary" >
        </div>

    </form>



    <div>
        <table bgcolor="black">
            <tr>
                <th style="padding: 30px">Food Name</th>
                <th style="padding: 30px">price</th>
                <th style="padding: 30px">Description</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">action</th>
            </tr>

            @foreach ($data as $data)


            <tr align="center">
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><img height="80" width="80" src="/foodimage/{{$data->image}}" alt=""></td>
                <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a> </td>
                <td><a href="{{url('/updatefood',$data->id)}}">update</a> </td>
            </tr>

            @endforeach
        </table>
    </div>
</div>
    </div>
    <!-- container-scroller -->
    @include('admin.adminjs')
  </body>
</html>
