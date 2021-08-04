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
                            <small class="text-danger" id="nameError"></small>
                        </div>

                        <div class="form-group">
                            <!-- <label class="text-primary">Email</label> -->
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            <small class="text-danger" id="emailError"></small>
                        </div>

                        <div class="form-group">
                            <!-- <label class="text-primary">Şəkil</label> -->
                            <input type="file" name="image" accept="image/*" id="image">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times"></i> Bağla</button>
                    <button type="submit" class="btn btn-success addB"> <i class="fa fa-plus"></i> Əlavə Et</button>
                    <button type="submit" class="btn btn-success updateB"> <i class="fas fa-retweet"></i> Yenilə</button>
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
                        data = data + "<th>" + i++ + "</th>"
                        data = data + "<th>" + value.image + "</th>"
                        data = data + "<th>" + value.name + "</th>"
                        data = data + "<th>" + value.email + "</th>"
                        data = data + "<th>"

                        data = data + "<div class='row justify-content-center'>" + "<div class = 'col-md-2 mr-3'>" + "<button class = 'btn btn-info btn-sm border-dark' ><i class = 'fa fa-pen'></i>" + "</button>" + "</div>"

                        data = data + "<div class='col-md-2'>" + "<form action = ''>" + "<button class = 'btn btn-danger btn-sm border-dark'> <i class = 'fa fa-times'> </i> </button>" + "</form>" + "</div>" + "</div>"

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





        // INSERT DATA
        $('.addB').click(function(event) {
            event.preventDefault()
            var name = $('#name').val()
            var email = $('#email').val()
            var image = $('#image').val()

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
                        timer: 1500
                    })
                },
                error: function(error) {
                    $.each(error, function() {
                        $('#nameError').text(error.responseJSON.errors.name)
                        $('#emailError').text(error.responseJSON.errors.email)
                        if(error.responseJSON.errors.name){
                            $('#name').addClass('is-invalid')
                        }
                        if(error.responseJSON.errors.email){
                            $('#email').addClass('is-invalid')
                        }
                    })

                }

            })
        })
    </script>


</body>

</html>