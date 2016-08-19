<form method="post" action="{{ url('/rsvp') }}" id="speaker_form" class="reg-form">
    <h3>Speaker Registration</h3>
    <div class="form-group">
        <label for="">Name:</label>
        <input name="full_name" type="text" required placeholder="Enter Your Name...">
    </div>

    <div class="form-group">
        <label for="">Email:</label>
        <input name="email" type="email" required placeholder="Enter Your Email...">
    </div>

    <div class="form-group">
        <label for="">Talk Name:</label>
        <input name="talk-name" type="text" required placeholder="Enter Your Talk Name... ">
    </div>

    <div class="form-group">
        <label for="title">Job Title:</label>
        <input type="text" name="job_title" placeholder="Enter your Job Title" required id="job_title" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea type="text" name="description" style="resize: none;" id="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button class="btn rounded submit-btn">Submit</button>
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
