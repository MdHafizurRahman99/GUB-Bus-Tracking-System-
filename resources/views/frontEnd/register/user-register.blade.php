<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Registration Form | GBS </title>
        <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Registration</div>
    <div class="content">
        <form action="{{route('save-user')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="user-details col-md-12">
                <div class="input-box">
                    <span class="details">Name</span>
                    <input type="text" placeholder="Enter your name" name="user_name"  value="{{ old('user_name') }}" required>
                    <span style="color: red">{{$errors->first('user_name')}}</span>
                </div>

                <div class="input-box">
                    <span class="details">Image</span>
                    <input type="file" name="image" file="{{ old('image') }}" />
                </div>

                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email" name="user_email" value="{{ old('user_email') }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" name="user_phone"  value="{{ old('user_phone') }}" required>
                    <span style="color: red">{{$errors->first('user_phone')}}</span>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" name="user_password"  required>
                    <span style="color: red">{{$errors->first('user_password')}}</span>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm your password" name="password_confirmation" required>
                </div>
                <div class="input-box">
                    <span class="details">Student/Teacher ID</span>
                    <input type="text" placeholder="ID"  name="user_id"  value="{{ old('user_id') }}" required>
                    <span style="color: red">{{$errors->first('user_id')}}</span>

                </div>
            </div>

            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</div>

</body>
</html>
