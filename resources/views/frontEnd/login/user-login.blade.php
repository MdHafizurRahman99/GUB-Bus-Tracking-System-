@extends('frontEnd.master')
@section('title')
    User Login
@endsection
@section('content')

    <section class="section-book">
        <div class="row">
            <div class="book">
                <div class="book__form">
                            <form action="{{route('user-login')}}" method="post" enctype="multipart/form-data">
                                <h2>{{session('message')}}</h2>
                                @csrf
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary">User Login</h2>
                        </div>

                        <div class="form__group">
                            <input type="text" class="form__input" placeholder="Enter UserName/Phone number" name="user_name" id="name" required/>
                            <label for="name" class="form__label">Enter User Name</label>
                        </div>

                        <div class="form__group">
                            <input type="password" class="form__input" placeholder="Enter Password"  name="user_password" required/>
                            <label f class="form__label">Password</label>
                        </div>

                        <div class="form__group">
                            <button class="btn btn--green">login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
