
@extends('layouts.app')
@section('links')
    <link rel="stylesheet" href="{{asset('css/admin/register_style.css')}}">
@endsection
@section('content')

    <div class="container">
        <div class="row">

            <div class="form-group">

                <form action="" method="post">
                    {{csrf_field()}}
                    <div style="margin: 7% auto 2% auto;width: 40% ;">
                        <h2 style="margin-bottom: 5%;font-family: IRANSansXFaNum-Bold; font-size: 24px"><a href="{{route('admin.login')}}">ورود</a>/ثبت نام</h2>
                        <input type="text" class="form-control" placeholder="نام کاربری"  name="username" id="username-input" >
                     <span>
                           @error('username')
                         {{$message}}
                         @enderror
                     </span>
                    </div>

                    <div style="margin: 3% auto 2% auto;width: 40%">
                        <input type="text" class="form-control " placeholder="موبایل" name="phone" id="phone-input" >
                      <span>  @error('phone')
                        {{$message}}
                        @enderror</span>
                    </div>

                    <div style="margin: 3% auto 2% auto;width: 40%">
                        <input type="password" class="form-control " placeholder="رمزعبور" name="password" id="password-input" >
                        @error('password')
                        {{$message}}
                        @enderror
                    </div>

                    <div style="margin: 1% auto 6% auto;width: 40%">
                        <input type="checkbox" class="form-check-input" name="checkbox" >
                        <label for="" class="px-2" style="font-family: IRANSansXFaNum-Medium;font-size: 14px">تمامی <a href="#">شرایط و قوانین</a> را میپذیرم.</label><br>
                       <span style="color: red">
                           @error('checkbox')
                           {{$message}}
                           @enderror</span>
                    </div>

                    <div style="margin: 3% auto 4% auto;width: 40%">
                        <button  type="submit">ثبت نام</button>
                    </div>

                    <div  style="margin: 1% auto 6% auto;width: 40% ;text-align: center">
                        <div>
                            <label style="font-family: IRANSansXFaNum-Medium;font-size: 14px ; ">آیا قبلا ثبت نام کرده اید؟ <a href="{{route('admin.login')}}">ورود</a></label>
                        </div>

                    </div>

                </form>

            </div>


        </div>
    </div>

@endsection
