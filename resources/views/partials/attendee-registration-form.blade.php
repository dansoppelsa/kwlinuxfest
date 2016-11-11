<div class="registration-form">
    <h3>Attendee Registration</h3>
    <div class="form-group">
        <label for="">Name:</label>
        <input  v-model="attendee.name"
                name="full_name"
                type="text"
                placeholder="Enter Your Name...">
    </div>
    <div class="form-group">
        <label for="">Email:</label>
        <input  v-model="attendee.email"
                name="email"
                type="email"
                required
                placeholder="Enter Your Email...">
    </div>
    <div class="form-group">
        <button v-on:click="submitAttendee()" :disabled="submitting" class="btn rounded submit-btn">Submit</button>
    </div>
</div>
