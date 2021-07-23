@extends('back.layouts.master')
@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success shadow border border-success text-center animate__animated animate__bounceInRight">
        <i class="fa fa-check mr-2"></i>
        {{ session('success')}}
    </div>
    @endif
</div>

<div class="card border border-dark shadow">
    <div class="card-header bg-light mt-2">

        <a href="{{route('numbers.create')}}" class="btn btn-outline-success float-right"> <i class="fas fa-plus"></i>
            Əlavə
            et</a>
        <button class="btn btn-outline-danger float-right mr-4" id="deleteAll"> <i class="fas fa-trash"></i> Seçilənləri
            sil</button>
        <button class="btn btn-info border border-dark float-right mr-4"><i class="fas fa-calculator mr-2"></i>
            {{$count}} - ƏDƏD NÖMRƏ
            VAR </button><br><br><br>

        <form action="{{route('search')}}" method="GET">
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-row">
                        <div class="col-md-1">
                            <select class="custom-select border border-success" name="prefix">
                                <option selected disabled>Prefix...</option>
                                <option value="50" @if(request()->get('prefix')==50) selected @endif>50</option>
                                <option value="51" @if(request()->get('prefix')==51) selected @endif>51</option>
                                <option value="10" @if(request()->get('prefix')==10) selected @endif>10</option>
                                <option value="55" @if(request()->get('prefix')==55) selected @endif>55</option>
                                <option value="99" @if(request()->get('prefix')==99) selected @endif>99</option>
                                <option value="70" @if(request()->get('prefix')==70) selected @endif>70</option>
                                <option value="77" @if(request()->get('prefix')==77) selected @endif>77</option>
                                <option value="60" @if(request()->get('prefix')==60) selected @endif>60</option>
                                <option value="12" @if(request()->get('prefix')==12) selected @endif>12</option>
                            </select>
                        </div>


                        <div class="col-md-1 form-group">
                            <input type="text" class="form-control border border-success w-50 text-center" name="num1" value="{{request()->get('num1')}}" maxlength="1" id="num1" onkeyup="autoTab('num1', '1', 'num2')" onkeypress="return AllowOnlynumbers(event);">
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="text" class="form-control border border-success w-50 text-center" name="num2" value="{{request()->get('num2')}}" maxlength="1" id="num2" onkeyup="autoTab('num2' , '1' , 'num3')" onkeypress="return AllowOnlynumbers(event);">
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="text" class="form-control border border-success w-50 text-center" name="num3" value="{{request()->get('num3')}}" maxlength="1" id="num3" onkeyup="autoTab('num3' , '1' , 'num4')" onkeypress="return AllowOnlynumbers(event);">
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="text" class="form-control border border-success w-50 text-center" name="num4" value="{{request()->get('num4')}}" maxlength="1" id="num4" onkeyup="autoTab('num4' , '1' , 'num5')" onkeypress="return AllowOnlynumbers(event);">
                        </div>

                        <div class="col-md-1 form-group">
                            <input type="text" class="form-control border border-success w-50 text-center" name="num5" value="{{request()->get('num5')}}" maxlength="1" id="num5" onkeyup="autoTab('num5' , '1' , 'num6')" onkeypress="return AllowOnlynumbers(event);">
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="text" class="form-control border border-success w-50 text-center" name="num6" value="{{request()->get('num6')}}" maxlength="1" id="num6" onkeyup="autoTab('num6' , '1' , 'num7')" onkeypress="return AllowOnlynumbers(event);">
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="text" class="form-control border border-success w-50 text-center" name="num7" value="{{request()->get('num7')}}" maxlength="1" id="num7" onkeypress="return AllowOnlynumbers(event);">
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="text" class="form-control border border-danger text-center" name="price" value="{{request()->get('price')}}" placeholder="Qiymət..." id="price" onkeypress="return AllowOnlynumbers(event);">
                        </div>
                        <div class="col-md-3">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-outline-primary w-100"><i class="fas fa-search"></i> Axtar</button>
                                </div>
                                <div class="col-md-5">
                                    <a href="{{route('numbers.index')}}" class="btn btn-outline-warning w-100 text-center" type="button"><i class="fas fa-sync"></i> Axtarışı Sıfırla</a>
                                </div>
                                <div class="col-md-4">
                                    <input type="reset" name="" id="" class="btn btn-outline-info w-100" value="Formu Sıfırla">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
    <div class="card-body">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" style="border: 3px solid black;">
                    <thead class="text-center border border-dark">
                        <tr class="bg-secondary text-white">
                            <th scope="col" class="align-middle">Seç <input type="checkbox" id="checkAll" class="form-control" style="box-shadow:none !important;"></th>
                            <th scope="col" class="align-middle">No</th>
                            <th scope="col" class="align-middle">Nömrə</th>
                            <th scope="col" class="align-middle">Qiymət</th>
                            <th scope="col" class="align-middle">Əlaqəli şəxs</th>	
                            <th scope="col" class="align-middle">Satıcı</th>
                            <th scope="col" class="align-middle">Operator</th>
                            <th scope="col" class="align-middle">Yaradılıb</th>
                            <th scope="col" class="align-middle">Yenilənib</th>
                            <th scope="col" class="align-middle">Operation</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($numbers as $number)
                        <tr id="sid{{$number->id}}">

                            <th class="align-middle">
                                <input type="checkbox" value="{{$number->id}}" name="ids" class="form-control checkBox" style="box-shadow:none !important;">
                            </th>

                            <th class="align-middle">
                                <div class="badge badge-pill badge-dark">
                                    {{ (($numbers->currentPage() - 1 ) * $numbers->perPage() ) + $loop->iteration }}
                                </div>
                            </th>
                            <th class="align-middle">
                                {{$number->prefix}}-{{$number->num1}}{{$number->num2}}{{$number->num3}}-{{$number->num4}}{{$number->num5}}-{{$number->num6}}{{$number->num7}}
                            </th>
                            <th class="align-middle"> {{ $number->price}} </th>
                            <th class="align-middle"> {{ $number->contact}} </th>
                            <th class="align-middle"> {{ $number->seller}} </th>
                            <th class="align-middle"> {{ $number->operator}} </th>
                            <th class="text-center align-middle" title="{{$number->created_at}}">
                                {{ Carbon\Carbon::parse($number->created_at)->isoFormat('LLL')}}
                            </th>
                            <th class="text-center align-middle" title="{{$number->updated_at}}">
                                {{ Carbon\Carbon::parse($number->updated_at)->isoFormat('LLL')}}
                            </th>
                            <td class="align-middle">
                                <a href="{{route('numbers.edit' , $number->id)}}" class="btn btn-info btn-sm" type="button" title="EDİTLƏ"><i class="fas fa-edit"></i></a>

                                <form action="{{route('numbers.destroy' , $number->id )}}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger btn-sm" type="submit" title="SİL"><i class="far fa-trash-alt"></i></button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="float-right">
                {{ $numbers->withQueryString()->links()}}
            </div>
        </div>
    </div>
</div>

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
@endsection
@endsection
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    setTimeout(function() {

        $(".alert").hide("2000")

    }, 3000);


    $(function(e) {
        $('#checkAll').click(function() {
            $('.checkBox').prop('checked', $(this).prop('checked'));
        })
    })



    $('#deleteAll').click(function(e) {
        e.preventDefault();

        var allids = [];
        $("input:checkbox[name=ids]:checked").each(function() {
            allids.push($(this).val());
        });


        $.ajax({
            url: "{{ route('allDeletes') }}",
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                ids: allids,
                _token: $('input[name=_token]').val()
            },
            success: function(data) {
                $.each(allids, function(key, val) {
                    $('#sid' + val).remove();
                })
                setTimeout(() => {
                    toastr.success(data.message);
                }, 300)
            }



        });
    });

    function autoTab(field1, len, field2) {
        if (document.getElementById(field1).value.length == len) {
            document.getElementById(field2).focus();
        }
    }

    function AllowOnlynumberss(e) {

        e = (e) ? e : window.event;
        var clipboardData = e.clipboardData ? e.clipboardData : window.clipboardData;
        var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
        var str = (e.type && e.type == "paste") ? clipboardData.getData('Text') : String.fromCharCode(key);

        return (/^\d+$/.test(str));
    }
</script>
@endsection