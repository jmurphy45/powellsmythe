<template>
    <div class="p-sm-5 pt-5 pb-5 p-3">

        <div class="ps-div" v-if="!thankyou">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 28.72" width="35" height="13" style="fill: #414042">
                <path class="a" d="M647,387.34h2.53c8.13,0,11.89-3.41,11.89-8.31,0-5.77-5.64-7.56-11.93-7.56H643.1V397H647Zm0-13h3.51c4,0,6.82,1.56,6.82,4.7,0,3.31-2.9,5.4-7.88,5.4H647Z" transform="translate(-643.1 -369.89)"/><path class="a" d="M713.05,394.62a11.79,11.79,0,0,1-8-2.87L703,394.11c1.39,1.42,5.43,3.45,9.76,3.45,6.58,0,10.38-3.51,10.38-7.13,0-9.05-14.22-7.56-14.22-13.07,0-2.39,2.45-3.51,5.11-3.51a9.74,9.74,0,0,1,6,2.13l2.05-2.37A13.44,13.44,0,0,0,714,371c-4.78,0-9.15,2.29-9.15,6.65,0,7.8,14.09,6.18,14.09,12.87C718.89,393,716.52,394.62,713.05,394.62Z" transform="translate(-643.1 -369.89)"/><polygon class="a" points="46.29 4.04 44.55 0 32.81 24.68 34.55 28.72 46.29 4.04"/>
            </svg> -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 491 25.13" style="fill: #8b784a; width: 200px; height: 11px">
                <path class="a" d="M444.28,372.42H438.4v23.45H442V387h2.33c7.45,0,10.9-3.13,10.9-7.62C455.22,374.06,450.05,372.42,444.28,372.42Zm0,11.93H442v-9.27h3.23c3.63,0,6.25,1.43,6.25,4.31C451.47,382.43,448.81,384.35,444.24,384.35Z" transform="translate(-438.4 -371.77)"/><path class="a" d="M488.53,372c-8.54,0-15.25,5.46-15.25,12.21s6.71,12.18,15.25,12.18c8.21,0,15.14-5.4,15.14-12.09C503.67,377.16,496.92,372,488.53,372Zm-.26,21.72c-6.22,0-11.21-4.55-11.21-9.63,0-5.36,5.1-9.39,11.47-9.39,6.15,0,11.32,4,11.32,9.57C499.85,389.55,494.79,393.67,488.27,393.67Z" transform="translate(-438.4 -371.77)"/><path class="a" d="M548.26,388.5a3.28,3.28,0,0,0-.23,1.14,3,3,0,0,0-.26-1.14l-8.47-16.7-8.2,16.7a3.41,3.41,0,0,0-.27,1.14,3.21,3.21,0,0,0-.22-1.14l-6.78-16.08h-3.94l10.49,24.44,9-17.63,9.11,17.66,10.26-24.47h-3.86Z" transform="translate(-438.4 -371.77)"/><polygon class="a" points="142.42 13.4 151.98 13.4 151.98 10.74 142.42 10.74 142.42 3.31 154.3 3.31 154.3 0.68 138.82 0.68 138.82 24.07 155.5 24.07 155.5 21.44 142.42 21.47 142.42 13.4"/><polygon class="a" points="192.95 21.44 178.99 21.44 178.99 0.65 175.39 0.65 175.39 24.07 192.95 24.07 192.95 21.44"/><polygon class="a" points="227.8 21.44 213.84 21.44 213.84 0.65 210.24 0.65 210.24 24.07 227.8 24.07 227.8 21.44"/><path class="a" d="M723.54,389.8c0-8.3-13-6.94-13-12,0-2.2,2.25-3.22,4.68-3.22a9,9,0,0,1,5.55,2l1.87-2.17a12.23,12.23,0,0,0-7.45-2.45c-4.39,0-8.4,2.11-8.4,6.11,0,7.15,12.93,5.66,12.93,11.8,0,2.32-2.17,3.81-5.36,3.81A10.87,10.87,0,0,1,707,391l-1.94,2.17c1.27,1.3,5,3.16,8.95,3.16C720.05,396.34,723.54,393.11,723.54,389.8Z" transform="translate(-438.4 -371.77)"/><polygon class="a" points="319.99 19.43 307.32 0 302.02 24.1 305.36 24.1 308.83 7.6 320.03 25 331.36 7.63 334.71 24.1 338.11 24.1 332.77 0.03 319.99 19.43"/><polygon class="a" points="364 14.99 355.56 0.84 353.03 2.25 362.3 17.61 362.3 24.1 365.51 24.1 365.51 17.61 374.97 2.21 372.51 0.84 364 14.99"/><polygon class="a" points="391.11 3.31 399.39 3.31 399.39 24.1 402.98 24.1 402.98 3.31 411.26 3.31 411.26 0.68 391.11 0.68 391.11 3.31"/><polygon class="a" points="448.7 10.81 434.05 10.81 434.05 0.65 430.45 0.65 430.45 24.1 434.05 24.1 434.05 13.51 448.7 13.51 448.7 24.1 452.29 24.1 452.29 0.65 448.7 0.65 448.7 10.81"/><polygon class="a" points="477.92 13.4 487.48 13.4 487.48 10.74 477.92 10.74 477.92 3.31 489.8 3.31 489.8 0.68 474.32 0.68 474.32 24.07 491 24.07 491 21.44 477.92 21.47 477.92 13.4"/>
            </svg>
        </div>

        <form v-if="!thankyou">
            <div class="modal-close">
                <button @click="closeModal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18px" height="18px" style="fill: #6a6862">
                        <path d="M12,2C6.47,2,2,6.47,2,12c0,5.53,4.47,10,10,10s10-4.47,10-10C22,6.47,17.53,2,12,2z M16.707,15.293 c0.391,0.391,0.391,1.023,0,1.414C16.512,16.902,16.256,17,16,17s-0.512-0.098-0.707-0.293L12,13.414l-3.293,3.293 C8.512,16.902,8.256,17,8,17s-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414L10.586,12L7.293,8.707 c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0L12,10.586l3.293-3.293c0.391-0.391,1.023-0.391,1.414,0 s0.391,1.023,0,1.414L13.414,12L16.707,15.293z"/>
                    </svg>
                </button>
            </div>
            <div class="form-row">
                <div class="col-sm-6 pt-2">
                    <label for="name">Name</label>
                    <input v-model="name" type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="col-sm-6 pt-2">
                    <label for="company">Company</label>
                    <input v-model="company" type="text" class="form-control" id="company" placeholder="Company">
                </div>
                <div class="col-sm-6 pt-2">
                    <label for="email">Email Address</label>
                    <input v-model="email" type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-sm-6 pt-2">
                    <label for="phone">Phone Number</label>
                    <input v-model="phone" type="tel" class="form-control" id="phone" placeholder="Phone">
                </div>
                <div class="col-sm-12 pt-2">
                    <label for="message">Message</label>
                    <textarea v-model="message" type="text" class="form-control pt-2 pb-2" id="message" placeholder="Message Details" rows="4"></textarea>
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="col pt-3">
                    <p class="modal-address mb-0">2537 Broad Avenue<br />Memphis, TN 38112</p>
                </div>
                <div class="col-auto pt-3">
                    <button @click="handleSubmit" type="button" class="btn btn-gold-outline press">SEND MESSAGE</button>
                </div>
            </div>
        </form>

        <div id="thank-you" v-else>
            <h4 class="mb-4">Thank you for contacting us.</h4>
            <p class="thank-you">Your message has been received and someone will be in touch<br /> with you as soon as possible.</p>
        </div>

    </div>
</template>

<script>
    export default {
        data(){
            return {
                name: null,
                company: null,
                email: null,
                phone: null,
                message: null,
                thankyou: false
            }
        },
        methods: {
            closeModal() {
                this.$refs['contact-modal'].hide()
            },
            handleSubmit(){
                axios.post('/api/v1/contact_us', {
                    name: this.name,
                    company: this.company,
                    email: this.email,
                    phone: this.phone,
                    message: this.message,
                })
                    .then( (response) => {
                        this.thankyou = true
                        setTimeout(() => {
                            this.$root.$emit('close-contact-us');
                            this.name = null;
                            this.company = null;
                            this.email = null;this.name = null;
                            this.message = null;
                            this.phone = null;
                            this.thankyou = false
                        }, 8000)
                    });
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
