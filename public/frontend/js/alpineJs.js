document.addEventListener('alpine:init', () => {
    Alpine.data('contactUS', () => ({
        form: {
            first_name: '',
            last_name: '',
            email: '',
            message: '',
        },
        errors: {},
        loading: false,
        successMessage: '',
        csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

        async submit() {
            this.errors = {};
            this.loading = true;

            const signupUrl = "{{ route('signup') }}";

            axios.post(signupUrl, {
                first_name: this.form.first_name,
                last_name: this.form.last_name,
                email: this.form.email,
                message: this.form.message,
            }, {
                headers: {
                    'X-CSRF-TOKEN': this.csrfToken,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            })
            .then(response => {
                if (response.data.status === 200) {
                    location.reload();
                    this.successMessage = 'Registration successful! You can now login.';
                    this.errors = {};
                    this.regform = false;
                }
            })
            .catch(error => {
                if (error.response && error.response.data.errors) {
                    this.errors = error.response.data.errors;
                }
            })
            .finally(() => {
                this.loading = false;
            });
        }
    }));
});
