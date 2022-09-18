@if($errors->any())
    <div class="alert alert-danger">


        @foreach($errors->all() as $error)
            <P>{{$error}}</P>
        @endforeach
    </div>
    @endif
