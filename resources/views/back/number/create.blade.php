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

            <form action="{{route('numbers.store')}}" method="POST" class="text-primary">
                @csrf
                <div class="form-row">
                    <div class="col-md-2">

                        <div class="select is-primary">
                            <select name="prefix" class="is-focused">
                                <option selected disabled>Prefix...</option>
                                <option value="50" @if(old('prefix')==50) selected @endif>50</option>
                                <option value="51" @if(old('prefix')==51) selected @endif>51</option>
                                <option value="10" @if(old('prefix')==10) selected @endif>10</option>
                                <option value="55" @if(old('prefix')==55) selected @endif>55</option>
                                <option value="99" @if(old('prefix')==99) selected @endif>99</option>
                                <option value="70" @if(old('prefix')==70) selected @endif>70</option>
                                <option value="77" @if(old('prefix')==77) selected @endif>77</option>
                                <option value="60" @if(old('prefix')==60) selected @endif>60</option>
                                <option value="12" @if(old('prefix')==12) selected @endif>12</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary" name="num1" value="{{old('num1')}}" maxlength="1" id="num1" onkeyup="autoTab('num1', '1', 'num2')">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num2" value="{{old('num2')}}" maxlength="1" id="num2" onkeyup="autoTab('num2' , '1' , 'num3')">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num3" value="{{old('num3')}}" maxlength="1" id="num3" onkeyup="autoTab('num3' , '1' , 'num4')">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num4" value="{{old('num4')}}" maxlength="1" id="num4" onkeyup="autoTab('num4' , '1' , 'num5')">
                    </div>

                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num5" value="{{old('num5')}}" maxlength="1" id="num5" onkeyup="autoTab('num5' , '1' , 'num6')">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num6" value="{{old('num6')}}" maxlength="1" id="num6" onkeyup="autoTab('num6' , '1' , 'num7')">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" class="input is-primary input-sm" name="num7" value="{{old('num7')}}" maxlength="1" id="num7">
                    </div>
                    <div class="col-md-1 form-group">
                        <input type="text" placeholder="Qiymət..." class="input is-primary" name="price" value="{{old('price')}}">
                    </div>
                    <div class="col-md-2 form-group">
                        <input type="text" placeholder="Operator Adı..." class="input is-primary" name="operator" value="{{old('operator')}}">
                    </div>
                </div>
                <hr>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="text-danger label">Satıcı :</label>
                        <input type="text" class="input is-primary" name="seller" value="{{old('seller')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="text-danger label">Əlaqə Nömrəsi :</label>
                        <input type="number" class="input is-primary" name="contact" value="{{old('contact')}}">
                    </div>
                </div>
                <hr>
                <hr><br>
                <button class="button is-primary is-fullwidth" type="submit"><i class="fa fa-plus mr-1"></i> Əlavə
                    Et</button><br><br>
            </form>

            <form action="{{route('import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="file is-primary">
                            <label class="file-label">
                                <input class="file-input" type="file" name="excel" required>
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Fayl seçin…
                                    </span>
                                </span>
                            </label>
                            <button class="button is-link  is-outlined ml-5" type="submit"> <i class="fa fa-plus mr-1"></i> Yükləyin</button>
                        </div>
                    </div>
                </div>
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