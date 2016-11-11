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
        complete: false
    },
    methods: {
        setMode: function(mode) {
            this.mode = mode
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
                this.submitting = false
            })
        },
        _getToken: function() {
            return document.querySelector('meta[name=_token]').content
        }
    },
    mounted: function () {

    }
})
