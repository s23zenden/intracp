@extends('master')

@section('content')
    <div class="banner" role="banner">
        <div class="group">
            <h1>Contact Us</h1>
        </div>
    </div>
    <div class="row">
        <div>
            <div id="map_canvas"></div>
        </div>
    </div>

    <div class='container'>
        <div class='box-span6'>
            @if (session('alert'))
                <div class="flash-success">
                    <span> {{ session('message') }}</span>
                </div>
            @endif
            {!! Form::open(array('url' => 'contact')) !!}
                @foreach($errors->all(
                    ':message'
                ) as $message){{$message}} @endforeach

                {!! Form::label('name','Name') !!}
                {!! Form::text('name','') !!}

                {!! Form::label('email','Email') !!}
                {!! Form::text('email','') !!}

                {!! Form::label('subject','Subject') !!}
                {!! Form::text('subject','') !!}

                {!! Form::label('mail','Message') !!}
                {!! Form::textarea('mail','') !!}

                {!! Form::checkbox('sendMe') !!} Send me a copy

                <br>
                <br>
                {!! Form::submit('Send', array('class' => '')) !!}
                {!! Form::reset('Clear', array('class' => '')) !!}

            {!!Form::close()!!}
            {{--<form>--}}
                {{--<label>Name:</label>--}}
                {{--<input type="text" name="name">--}}
                {{--<label>Email:</label>--}}
                {{--<input type="email" name="name">--}}
                {{--<label>Subject:</label>--}}
                {{--<input type="text" name="name">--}}
                {{--<label>Message:</label>--}}
                {{--<input type="text" name="name">--}}
                {{--<input type='checkbox'>Send me a copy--}}
                {{--<button type='submit' class='right'>Send</button>--}}
            {{--</form>--}}
        </div>

        <div class='box-span6'>
            <div class="center">
                <h3>Intracp</h3>
                <p>Hugo wolfstraat 8</p>
                <p>5653 AG, Einhoven</p>
                <p>The Netherlands</p>
                <p>Tel: +31(0)685561114</p>
                <p><a>info@intracp.com</a></p>
            </div>
        </div>
    </div>

@stop