@extends('back.layouts.master')
@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger shadow border border-danger">
        <ol>
            @foreach ($errors->all() as $error)
            <li style="list-style-type: none;" class="mb-1"> <i class="fas fa-exclamation mr-1"></i> {{ $error }}
            </li>
            @endforeach
        </ol>
    </div>
    @endif
</div>


<div class="container">
    <div class="box card shadow-lg mt-5 border border-dark bg-light">
        <div class="card-header box border border-danger">
            <a href="{{route('numbers.index')}}" class="button is-danger float-right" type="" style="text-decoration: none"> <i class="fa fa-arrow-left mr-1">
                </i>
                Geri</a>
        </div>
        <div class="card-content">
            <hr>
            <hr><br>
            <form action="{{route('numbers.update' , $number->id)}}" method="POST" class="text-primary">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="col-md-2">
                        <div class="select is-primary">
                            <select name="prefix" class="is-focused">
                                <option selected disabled>Prefix...</option>
                                <option value="50" @if($number->prefix == 50) selected @endif>50</option>
                                <option value="51" @if($number->prefix == 51) selected @endif>51</option>
                                <option value="10" @if($number->prefix == 10) selected @endif>10</option>
                                <option value="55" @if($number->prefix == 55) selected @endif>55</option>
                                <option value="99" @if($number->prefix == 99) selected @endif>99</option>
                                <option value="70" @if($number->prefix == 70) selected @endif>70</option>
                                <option value="77" @if($number->prefix == 77) selected @endif>77</option>
                                <option value="60" @if($number->prefix == 60) selected @endif>60</option>
                                <option value="12" @if($number->prefix == 12) selected @endif>12</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary" name="num1" value="{{$number->num1}}" maxlength="1" id="num1" onkeyup="autoTab('num1', '1', 'num2')">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num2" value="{{$number->num2}}" maxlength="1" id="num2" onkeyup="autoTab('num2' , '1' , 'num3')">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num3" value="{{$number->num3}}" maxlength="1" id="num3" onkeyup="autoTab('num3' , '1' , 'num4')">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num4" value="{{$number->num4}}" maxlength="1" id="num4" onkeyup="autoTab('num4' , '1' , 'num5')">
                    </div>

                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num5" value="{{$number->num5}}" maxlength="1" id="num5" onkeyup="autoTab('num5' , '1' , 'num6')">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num6" value="{{$number->num6}}" maxlength="1" id="num6" onkeyup="autoTab('num6' , '1' , 'num7')">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num7" value="{{$number->num6}}" maxlength="1" id="num7">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" placeholder="Qiymət..." class="input is-primary" name="price" value="{{$number->price}}">
                    </div>
                    <div class="col-md-2 form-group">
                        <input type="text" placeholder="Operator Adı..." class="input is-primary" name="operator" value="{{$number->operator}}">
                    </div>
                </div>
                <hr>
                <hr><br>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="text-danger label">Satıcı :</label>
                        <input type="text" class="input is-primary input-sm" name="seller" value="{{$number->seller}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="text-danger label">Əlaqə Nömrəsi :</label>
                        <input type="number" class="input is-primary input-sm" name="contact" value="{{$number->contact}}">
                    </div>
                </div>
                <hr>
                <hr><br>
                <button class="button is-primary is-fullwidth" type="submit"><i class="fas fa-retweet mr-1"></i>
                    Yenilə</button><br><br>
            </form>
        </div>
    </div>
</div>

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
@endsection
@section('js')

<script>
    function autoTab(field1, len, field2) {
        if (document.getElementById(field1).value.length == len) {
            document.getElementById(field2).focus();
        }
    }
</script>
@endsection
@endsection