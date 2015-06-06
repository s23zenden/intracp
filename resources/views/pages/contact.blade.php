@extends('master')

@section('content')
    <div>
        <h2>Contact</h2>
    </div>
    <div>
        <p>map</p>
    </div>
    <div class='container'>
        <div class='box-span6'>
            <h3>Intracp</h3>
            <p>Hugo wolfstraat 8</p>
            <p>5653 AG, Einhoven</p>
            <p>The Netherlands</p>
            <p>Tel: +31(0)685561114</p>
            <p><a>info@intracp.com</a></p>
        </div>
        <div class='box-span6'>
            <form>
                <label>Name:</label>
                <input type="text" name="name">
                <label>Email:</label>
                <input type="email" name="name">
                <label>Subject:</label>
                <input type="text" name="name">
                <label>Message:</label>
                <input type="text" name="name">
                <input type='checkbox'>Send me a copy
                <button type='submit' class='right'>Send</button>
            </form>
        </div>
    </div>
@stop