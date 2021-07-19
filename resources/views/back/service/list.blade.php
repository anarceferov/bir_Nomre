@extends('back.layouts.master')
@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success shadow border border-success text-center">
        <i class="fa fa-check mr-2"></i>
        {{ session('success')}}
    </div>
    @endif
</div>

<div class="card shadow mb-4">
    <div class="card-header">
        <a href="{{route('services.create')}}" class="btn btn-dark float-right"> <i class="fa fa-plus"></i> Əlavə Et</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Single image</th>
                        <th>Service</th>
                        <th>Content</th>
                        <th>Created_At</th>
                        <th>Updated_At</th>
                        <th>Crud</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr class="text-center"> 
                        <th class="align-middle">
                            <div class="badge badge-pill badge-dark">
                                {{$loop->iteration}}
                            </div>
                        </th>

                        <th class="align-middle"><img src="{{asset('storage/service/'.$service->image)}}" alt=""  width='200' height='150' class="img-thumbnail" style="object-fit: contain"></th>
                        <th class="align-middle"><img src="{{asset('storage/service/'.$service->single_image)}}" alt=""  width='200' height='150' class="img-thumbnail" style="object-fit: contain"></th>
                        <th class="align-middle">{{Str::limit($service->name , 30)}}</th>
                        <th class="align-middle">{!!Str::limit($service->content , 30)!!}</th>
                        <th class="align-middle">{{$service->created_at}}</th>
                        <th class="align-middle">{{$service->updated_at}}</th>
                   
                        <th class="align-middle">
                            <a href="{{route('services.edit' , $service->id)}}" class="btn btn-info d-inline btn-sm"
                                type="button"><i class="fas fa-pencil-alt"></i></a>

                            <form action="{{route('services.destroy' , $service->id )}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger btn-sm btn-circle" type="submit"><i
                                        class="far fa-trash-alt"></i></button>
                            </form>

                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection








@section('css')
<link href="{{asset('back/')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection


@section('js')
<script src="{{asset('back/')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('back/')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('back/')}}/js/demo/datatables-demo.js"></script>

<script>
    setTimeout(function(){

        $(".alert").hide("2000")

    }, 3000);
</script>
@endsection