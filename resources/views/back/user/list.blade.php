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

<div class="card border border-dark shadow">
    <div class="card-header bg-light mt-2">
        <a href="{{route('users.create')}}" class="btn btn-success float-right"> <i class="fas fa-plus"></i> Əlavə et</a>
    </div>
    <div class="card-body">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" style="border: 3px solid black;">
                    <thead class="text-center border border-dark">
                        <tr class="bg-secondary text-white">
                            <th scope="col">No</th>
                            <th scope="col">Ad</th>
                            <th scope="col">Email</th>
                            <th scope="col">Yaradılıb</th>
                            <th scope="col">Prosess</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($users as $user)
                        <tr>
                            <th class="align-middle">
                                <div class="badge badge-pill badge-dark">
                                    {{ (($users->currentPage() - 1 ) * $users->perPage() ) + $loop->iteration }}
                                </div>
                            </th>
                            <th class="text-left align-middle"> {{ $user->name}} </th>
                            <th class="text-left align-middle"> {{ $user->email}} </th>
                            <th class="text-center align-middle" title="{{$user->created_at}}"> {{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </th>
                            <td class="align-middle">
                                <a href="{{route('users.edit' , $user->id)}}" class="btn btn-info d-inline btn-sm" type="button"><i class="fas fa-user-edit"></i></a>

                                <form action="{{route('users.destroy' , $user->id )}}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i></button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="float-right">
                {{ $users->withQueryString()->links()}}
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    setTimeout(function() {

        $(".alert").hide("2000")

    }, 3000);
</script>
@endsection