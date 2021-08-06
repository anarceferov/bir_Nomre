<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.0/sweetalert2.min.css">
    <title>Ajax</title>
    @toastr_css

</head>

<body style="background-color: brown;">

    <div class="container" style="padding-top: 50px;">
        <div class="card shadow-lg border-dark">
            <div class="card-header">
                <h1 class="pb-5 text-center text-primary">Laravel Ajax Crud...</h1>
                <button class="btn btn-success mb-4" style="float:right;" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-plus"></i> Əlavə et</button>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="bg-dark text-white">
                        <tr class="text-center">
                            <th>#</th>
                            <th>Şəkil</th>
                            <th>Ad</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr class="text-center">
                            <th>1</th>
                            <th>Mark</th>
                            <th>Otto</th>
                            <th>@mdo</th>
                            <th>
                                <div class='row justify-content-center'>
                                    <div class='col-md-2'>
                                        <button class='btn btn-info btn-sm border-dark'> <i class='fa fa-pen'></i> </button>
                                    </div>

                                    <div class='col-md-2'>
                                        <form action=''>
                                            <button class='btn btn-danger btn-sm border-dark'> <i class='fa fa-times'></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </th>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title addT">Əlavə et</h5>
                    <h5 class="modal-title updateT">Yenilə</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-danger">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <!-- <label class="text-primary">Ad Soyad</label> -->
                            <input type="text" class="form-control" name="name" id="name" placeholder="Ad Soyad">
                            <small class="text-danger" id="nameError"></small><br>
                        </div>

                        <div class="form-group">
                            <!-- <label class="text-primary">Email</label> -->
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            <small class="text-danger" id="emailError"></small><br>
                        </div>

                        <div class="form-group">
                            <!-- <label class="text-primary">Şəkil</label> -->
                            <input type="file" name="image" accept="image/*" id="image">
                        </div>
                        <input type="hidden" id="id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times"></i> Bağla</button>
                    <button type="submit" class="btn btn-success addB"> <i class="fa fa-plus"></i> Əlavə Et</button>
                    <button type="submit" class="btn btn-success updateB"> <i class="fas fa-retweet"></i> <i class="fas fa-spinner fa-spin"></i> Yenilə</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @toastr_js
    @toastr_render
    <script>
        $('.fa-spinner').hide()
        $('.addT').show();
        $('.updateT').hide();
        $('.addB').show();
        $('.updateB').hide();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // SHOW DATA
        function allData() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ route('tests.list') }}",
                success: function(response) {
                    var i = 1
                    var data = ""
                    $.each(response, function(key, value) {
                        data = data + "<tr class='text-center'>"
                        data = data + "<th  style='border: red solid 1px;'>" + i++ + "</th>"
                        data = data + "<th  style='border: red solid 1px;'>" + value.image + "</th>"
                        data = data + "<th  style='border: red solid 1px;'>" + value.name.substr(0, 20) + "</th>"
                        data = data + "<th  style='border: red solid 1px;'>" + value.email.substr(0, 25) + "</th>"
                        data = data + "<th  style='border: red solid 1px;'>"

                        data = data + "<div class='row justify-content-center'>" + "<div class = 'col-md-2 mr-3'>" + "<button class = 'btn btn-info' onclick='editData(" + value.id + ")'><i class = 'fa fa-pen'></i>" + "</button>" + "</div>"

                        data = data + "<div class='col-md-2'>" + "<a type='button' class = 'btn btn-danger'> <i class = 'fa fa-times' onclick='deleteData(" + value.id + ")'> </i> </a >" + "</div>" + "</div>"

                        data = data + "</th>"
                        data = data + "</tr>"
                    })

                    $('tbody').html(data)
                }
            })
        }



        function clearData() {
            $('#name').val('')
            $('#email').val('')
            $('#image').val('')
            $('#nameError').text('')
            $('#emailError').text('')
            $('#name').removeClass('is-invalid')
            $('#email').removeClass('is-invalid')

        }
        allData()


        $('.mb-4').click(function() {
            $('.addT').show();
            $('.updateT').hide();
            $('.addB').show();
            $('.updateB').hide();
            clearData()
        })


        // INSERT DATA
        $('.addB').click(function(e) {
            e.preventDefault()
            var name = $('#name').val()
            var email = $('#email').val()
            var image = $('#image').val()
            $('.addB').hide()
            $.ajax({
                type: "POST",
                url: "{{route('tests.store')}}",
                data: {
                    name: name,
                    email: email,
                    image: image
                },
                success: function() {
                    allData()
                    clearData()
                    $('.fade').modal('hide');
                    toastr.success('Ugurla Elave Edildi')
                    Swal.fire({
                        icon: 'success',
                        title: 'Ugurla Elave Edildi',
                        showConfirmButton: false,
                        timer: 1100
                    })
                },
                error: function(error) {
                    $.each(error, function() {
                        $('.addB').show()
                        $('#nameError').text(error.responseJSON.errors.name)
                        $('#emailError').text(error.responseJSON.errors.email)
                        if (error.responseJSON.errors.name) {
                            $('#name').addClass('is-invalid')
                        }
                        if (error.responseJSON.errors.email) {
                            $('#email').addClass('is-invalid')
                        }
                    })

                }

            })
        })
        // END

        // Edit Data
        function editData(id) {
            $('.fade').modal('show')
            clearData()
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: "test/edit/" + id,
                success: function(data) {
                    $('#id').val(data.id)
                    $('#name').val(data.name)
                    $('#email').val(data.email)

                    $('.addT').hide();
                    $('.updateT').show();
                    $('.addB').hide();
                    $('.updateB').show();
                }
            })
        }
        // END


        // Update Data
        $('.updateB').click(function(e) {
            e.preventDefault()
            $('.fa-spinner').show()
            $('.fa-retweet').hide()
            var id = $('#id').val()
            var name = $('#name').val()
            var email = $('#email').val()

            $.ajax({
                type: 'PUT',
                dataType: 'json',
                data: {
                    name: name,
                    email: email
                },
                url: 'test/update/' + id,
                success: function(data) {
                    $('.fade').modal('hide');
                    $('.fa-retweet').show()
                    $('.fa-spinner').hide()
                    allData()
                    clearData()
                    Swal.fire({
                        icon: 'success',
                        title: 'Ugurla Yenilendi',
                        showConfirmButton: false,
                        timer: 1100
                    })
                },
                complete: function(data) {
                    $('.addT').show();
                    $('.updateT').hide();
                    $('.addB').show();
                    $('.updateB').hide();
                    clearData()
                }
            })
        })


        function deleteData(id) {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: 'test/delete/' + id,
                success: function(data) {
                    allData()
                    Swal.fire({
                        icon: 'success',
                        title: 'Ugurla Silindi',
                        showConfirmButton: false,
                        timer: 1100
                    })
                }
            })
        }
    </script>


</body>

</html>