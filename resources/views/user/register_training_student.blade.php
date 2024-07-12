<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/app-assets/images/trove.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/mystyle.css')}}" />
</head>

<body>
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-sm-8" style="background-color: white;">
                <div class="form-container">
                    <h3 class="title">Student Registration</h3>
                    <form class="form-horizontal" action="{{ route('student-register.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-6 mb-3">
                                <label>Name<span class="text-danger">*</span></label>
                                <input class="form-control" name="name" type="text" placeholder="Students Name">
                                @error('name')
                                    <span class="error" style="color: red;">This Is required</spna>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Father Name<span class="text-danger">*</span></label>
                                <input class="form-control" name="fname" type="text" placeholder="Father's Name">
                                @error('fname')
                                    <span class="error" style="color: red;">This field is required</span>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>College Name<span class="text-danger">*</span></label>
                                <select class="form-control" name="collegename">
                                    <option selected value="">--Select College--</option>
                                    @foreach ($diplomacolleges as $diplomacollege)
                                        <option value="{{ $diplomacollege->name }}"> {{ $diplomacollege->name }} </option>
                                    @endforeach
                                </select>
                                @error('collegename')
                                    <span class="error" style="color: red;">This field is required</spna>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Session<span class="text-danger">*</span></label>
                                <select class="form-control" name="session">
                                    <option value="">--Select Session--</option>
                                    <option value="2020-2023">2020-2023</option>
                                    <option value="2021-2024">2021-2024</option>
                                    <option value="2022-2025">2022-2025</option>
                                </select>
                                @error('session')
                                    <span class="error" style="color: red;">This Field Is Required</spna>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Branch<span class="text-danger">*</span></label>
                                <select class="form-control" name="branch">
                                    <option>--Select Branch--</option>
                                    <option value="Diploma in Mechanical Engineering">Diploma in Mechanical
                                        Engineering</option>
                                    <option value="Diploma in Electrical Engineering">Diploma in Electrical
                                        Engineering</option>
                                    <option value="Diploma in Civil Engineering">Diploma in Civil Engineering
                                    </option>
                                    <option value="Diploma in Automobile Engineering">Diploma in Automobile
                                        Engineering</option>
                                    <option value="Diploma in Computer Science">Diploma in Computer Science</option>
                                    <option value="Diploma in Petroleum Engineering">Diploma in Petroleum
                                        Engineering</option>
                                    <option value="Diploma in Textile Technology">Diploma in Textile Technology
                                    </option>
                                    <option value="Diploma in Mining Engineering">Diploma in Mining Engineering
                                    </option>
                                    <option value="Diploma in Chemical Engineering">Diploma in Chemical Engineering
                                    </option>
                                </select>
                                @error('branch')
                                    <span class="error" style="color: red;">This Field Is Required</spna>
                                    @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Technology<span class="text-danger">*</span></label>
                                <select class="form-control" name="technology">
                                    <option selected value="">--Select Technology--</option>
                                    @foreach ($technologies as $technology)
                                        <option value="{{ $technology->name }}"> {{ $technology->name }} </option>
                                    @endforeach
                                </select>
                                @error('technology')
                                    <span class="error" style="color: red;">This field is required</spna>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Mobile<span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="mobileno" placeholder="Mobile Number">
                                @error('mobileno')
                                    <span class="error" style="color: red;">This field is required</spna>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Email ID<span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="email" placeholder="Email">
                                @error('email')
                                    <span class="error" style="color: red;">This field is required</spna>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Photo<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" name="pic" id="formFile">
                                @error('pic')
                                    <span class="error" style="color: red;">This field is required</spna>
                                @enderror
                            </div>

                            <h4 class="sub-title">Document Information</h4>

                            <div class="form-group col-6 phone-no mb-3">
                                <label>Aadhaar No<span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="aadharno" placeholder="Aadhar Number">
                                @error('aadharno')
                                    <span class="error" style="color: red;">This field is required</span>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Aadhaar Photo<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" name="aadharpic" id="formFile" >
                                @error('aadharpic')
                                    <span class="error" style="color: red;">This field is required</span>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Highschool Roll No<span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="highschool_rollno" placeholder="Highschool Roll Number">
                                @error('highschool_rollno')
                                    <span class="error" style="color: red;">This field is required</span>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>High School Marksheet<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="formFile" name="highschool_marksheet">
                                @error('highschool_marksheet')
                                    <span class="error" style="color: red;">This field is required</span>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Intermediate Roll No </label>
                                <input class="form-control" type="number" name="intermediate_rollno" placeholder="Intermediate Roll Number">
                                @error('intermediate_rollno')
                                    <span class="error" style="color: red;">This field is required</span>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Intermediate Marksheet</label>
                                <input class="form-control" type="file" name="intermediate_marksheet" id="formFile">
                                @error('intermediate_marksheet')
                                    <span class="error" style="color: red;">This Field Is Required</span>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Diploma Enrollment No<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="diploma_rollno" placeholder="Diploma Enrollment Number">
                                @error('diploma_rollno')
                                    <span class="error" style="color: red;">This field is required</span>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-5">
                                <label>Diploma Marksheet<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" name="diploma_marksheet" id="formFile">
                                @error('diploma_marksheet')
                                    <span class="error" style="color: red;">This field is required</span>
                                @enderror
                            </div>
                            <div class="form-group col-6 mb-5">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    View QR
                                </button>
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label>Transaction Id<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="transaction_id" placeholder="Enter Transaction Number" required>
                                @error('transaction_id')
                                    <span class="error" style="color: red;">This field is required</span>
                                @enderror
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="text-align: center;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel" >Pay Now</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('frontend/assets/images/payment_qr.jpeg') }}" class="img-thumbnail" alt="Payment QR">
                                        <h6 class="text-center">UPI - killerheman@axl</h6>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-4 text-center">Register Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" >
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
    @include('sweetalert::alert')
</body>

</html>
