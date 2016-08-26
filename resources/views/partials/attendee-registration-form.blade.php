<form method="post" action="{{ url('/register/attendee') }}" id="attendee_form" class="reg-form">
    <h3>Attendee Registration</h3>
    <div class="form-group">
        <label for="">Name:</label>
        <input name="full_name" type="text" required  placeholder="Enter Your Name...">
    </div>

    <div class="form-group">
        <label for="">Email:</label>
        <input name="email" type="email" required placeholder="Enter Your Email...">
    </div>

    <div class="form-group">
        <button class="btn rounded submit-btn">Submit</button>
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
