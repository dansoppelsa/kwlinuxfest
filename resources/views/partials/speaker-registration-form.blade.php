<div class="registration-form">
    <h3>Speaker Registration</h3>
    <div class="form-group">
        <label for="">Name:</label>
        <input  v-model="speaker.name"
                type="text"
                required
                placeholder="Enter Your Name...">
    </div>

    <div class="form-group">
        <label for="">Email:</label>
        <input  v-model="speaker.email"
                type="email"
                required
                placeholder="Enter Your Email...">
    </div>

    <div class="form-group">
        <label for="">Talk Name:</label>
        <input  v-model="speaker.talk_name"
                type="text"
                required
                placeholder="Enter Your Talk Name... ">
    </div>

    <div class="form-group">
        <label for="title">Job Title:</label>
        <input  v-model="speaker.job_title"
                type="text"
                placeholder="Enter your Job Title"
                required
                id="job_title"
                class="form-control"/>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea   v-model="speaker.description"
                    type="text"
                    style="resize: none;"
                    id="description"
                    class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button v-on:click="submitSpeaker()" class="btn rounded submit-btn">Submit</button>
    </div>
</div>
