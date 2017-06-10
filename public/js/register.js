new Vue({
    el: "#registration-app",
    data: {
        mode: null,
        attendee: {
            name: null,
            email: null
        },
        speaker: {
            name: null,
            email: null,
            talk_name: null,
            job_title: null,
            description: null
        },
        feedback: null,
        token: null,
        submitting: false,
        complete: false,
        errors: null 
    },
    methods: {
        setMode: function(mode) {
            this.mode = mode
        },
        displayErrors(json) {
            let errorString = '';
            const body = json.body;

            for (var error in body) {
                errorString = errorString.concat(body[error]);
                if (errorString.length > Object.keys(body).length > 1) {
                    errorString = errorString.concat(', ');
                }
            }

            toastr.error(errorString);
            return;
        },
        submitAttendee: function () {
            this.submitting = true
            this.$http.post('/register/attendee', {
                'full_name': this.attendee.name,
                'email': this.attendee.email,
                '_token': this._getToken()
            }).then(function (response) {
                this.submitting = false
                this.mode = null
                this.complete = true
                this.feedback = 'Thank you for registering to attend!'
            }, function (response) {
                this.errors = response
                this.submitting = false
            })
        },
        submitSpeaker: function () {
            this.submitting = true
            this.$http.post('/register/speaker', {
                'full_name': this.speaker.name,
                'email': this.speaker.email,
                'talk_name': this.speaker.talk_name,
                'job_title': this.speaker.job_title,
                'description': this.speaker.description,
                '_token': this._getToken()
            }).then(function(response) {
                this.submitting = false
                this.mode = null
                this.complete = true
                this.feedback = 'Thank you for registering to speak!'
            }, function(response) {
                this.errors = response
                this.submitting = false
            })
        },
        _getToken: function() {
            return document.querySelector('meta[name=_token]').content
        }
    },
    computed: {
        attendeeFormIsValid: function () {
            return  this.attendee.name &&
                    this.attendee.email;
        },
        speakerFormIsValid: function () {
            return  this.speaker.name &&
                    this.speaker.email &&
                    this.speaker.talk_name &&
                    this.speaker.job_title &&
                    this.speaker.description;
        }
    },

    mounted: function () {

    }
})
