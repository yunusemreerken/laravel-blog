@extends('layouts.master')

@section('content')
  @section('title','contant')
  @section('masthead')
    <div class="page-heading">
        <h1>Contact Me</h1>
        <hr class="small">
        <span class="subheading">Have questions? I have answers (maybe).</span>
    </div>
  @endsection
  <!-- Main Content -->
  <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary">Send</button>
                </div>
            </form>
          </div>
      </div>
  </div>

  <hr>
@endsection
