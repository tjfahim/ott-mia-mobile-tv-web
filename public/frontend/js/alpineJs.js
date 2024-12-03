document.addEventListener('alpine:init', ()=>{
    Alpine.data('contactUS', ()=> ({
        form: {
            first_name: '',
            last_name: '',
            email: '',
            message: '',
        },
        errors: {},

        async submit(){
            this.errors = {};

            axios.post('{{ URL::to('signup') }}', {
                name: this.name,
                last_name: this.last_name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation
            }, {
                headers: {
                    'X-CSRF-TOKEN': this.csrfToken,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
    
                if (response.data.status === 200) {
                    location.reload()
                    this.successMessage = 'Registration successful! You can now login.';
                    this.errors = {};
                    this.regform = false;  // Close the modal on success
                    this.loading = false;
                }
            })
            .catch(error => {
                if (error.response && error.response.data.errors) {
                    this.errors = error.response.data.errors;
                    this.showModal = true;  // Open the error modal on error
                }
                this.loading = false;
            });
        }
    }));
})