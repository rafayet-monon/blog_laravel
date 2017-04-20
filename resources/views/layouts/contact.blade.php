@extends('app')
@section('content')

<div class="contact">
    <div class="main-head-section">

        <h3>contact</h3>

        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424396.3176723366!2d150.92243255000002!3d-33.7969235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1431587453420" width="100%" height="151px" frameborder="0" style="border:0"></iframe>
        </div>
    </div>

    <div class="contact_top">

        <div class="col-md-8 contact_left">
            <h4>Contact Form</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>
            <form>
                <div class="form_details">
                    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                    <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
                    <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                    <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                    <div class="clearfix"> </div>
                    <div class="sub-button">
                        <input type="submit" value="Send message">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 company-right">
            <div class="company_ad">
                <h3>Contact Info</h3>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo.</span>
                <address>
                    <p>email:<a href="#">info@display.com</a></p>
                    <p>phone: 1.306.222.4545</p>
                    <p>222 2nd Ave South</p>
                    <p>Saskabush, SK   S7M 1T6</p>

                </address>
            </div>

        </div>
        <div class="clearfix"> </div>

    </div>
</div>
    @endsection