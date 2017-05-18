@extends('frontEnd.master')
@section('title')
Contactus
@endsection
@section('body')
<div class="page-head">
    <div class="container">
        <h3>Contact Us</h3>
    </div>
</div>
<!-- //banner -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="map wow fadeInDown animated" data-wow-delay=".5s">
            <h3 class="tittle">View On Map</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
        </div>
        <h3 class="tittle">Contact Form</h3>
        {!!Form::open(['url'=>'storeContactUs', 'method'=>'POST'])!!}
            <div class="contact-form2">
                <input type="text" placeholder="Name" name="subject">
                <input type="email" placeholder="Email" name="email">
                <textarea type="text" name="message" required="" placeholder="Message"></textarea>
                <input type="submit"  class="btn btn-block" value="Submit" >
            </div>
     {!!Form::close()!!}
    </div>
</div>

<!-- //contact -->
@endsection