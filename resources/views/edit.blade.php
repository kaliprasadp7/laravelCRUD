<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" class="rel">
</head>
<body>

    <style>
        .main-container{
            /* margin:20px; */
            padding:40px;
            background-color:#f8f9fe;
        }
        .inner-container{
            padding:20px;
            background-color:white;
        }
        .heading{
            text-align:center;
            margin-bottom:40px;
            /* color: #f8f9fe; */
        }
        .row{
            margin-bottom:20px;
        }
        .form-control{
            background-color:#f3f4f6;
        }
        .submit{
            text-align:right;
        }
    </style>
    <div class="main-container">
        <div class="inner-container">
            <div class="heading">
                <label for="">Update User</label>
            </div>
            <form action="{{ route('companies.update',$company->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="firstname" class="form-label">FIRST NAME</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $company->first_name }}" placeholder="First name" required>
                </div>
                <div class="col">
                    <label for="lastname" class="form-label">LAST NAME</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $company->last_name }}" placeholder="Last name" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="contactnumber" class="form-label">CONTACT NUMBER</label>
                    <input type="text" class="form-control" id="contact_num" name="contact_num" value="{{ $company->contact_num }}" placeholder="Contact Number" required>
                </div>
                <div class="col">
                    <label for="username" class="form-label">USER NAME</label>
                    <input type="text" class="form-control" id="user_name" class="user_name" value="{{ $company->user_name }}" placeholder="User Name" name=user_name required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="text" class="form-control" value="{{ $company->email }}" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="col">
                    <label for="selectcompany" class="form-label">SELECT COMPANY</label>
                    <input type="text" class="form-control" id="select_company" value="{{ $company->select_company }}" name="select_company" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p><b>User Type</b></p>
                </div>

                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  value="Super Admin" value="{{ $company->user_type }}" name="user_type" id="flexRadioDefault1" {{ $company->user_type == "Super Admin" ? 'checked' : '' }} >
                        <label class="form-check-label" for="flexRadioDefault1">
                        Super Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="Company Admin" type="radio" name="user_type" value="{{ $company->user_type }}" id="flexRadioDefault2" {{ $company->user_type == "Company Admin" ? 'checked' : '' }} >
                        <label class="form-check-label" for="flexRadioDefault2">
                        Company Admin
                        </label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Manager" name="user_type" value="{{ $company->user_type }}" id="flexRadioDefault3" {{ $company->user_type == "Manager" ? 'checked' : '' }} >
                        <label class="form-check-label" for="flexRadioDefault3">
                        Manager
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  value="Subscriber" type="radio" name="user_type" value="{{ $company->user_type }}" id="flexRadioDefault4" {{ $company->user_type == "Subscriber" ? 'checked' : '' }} >
                        <label class="form-check-label" for="flexRadioDefault4">
                        Subscriber
                        </label>
                    </div>
                </div>
            </div>
            <div class="submit">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>

        </div>
    </div>
</body>
</html>
