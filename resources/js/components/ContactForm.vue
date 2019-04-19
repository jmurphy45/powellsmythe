<template>
    <div class="p-sm-5 pt-5 pb-5 p-3">

        <div class="ps-div">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 28.72" width="35" height="13" style="fill: #414042"><path class="a" d="M647,387.34h2.53c8.13,0,11.89-3.41,11.89-8.31,0-5.77-5.64-7.56-11.93-7.56H643.1V397H647Zm0-13h3.51c4,0,6.82,1.56,6.82,4.7,0,3.31-2.9,5.4-7.88,5.4H647Z" transform="translate(-643.1 -369.89)"/><path class="a" d="M713.05,394.62a11.79,11.79,0,0,1-8-2.87L703,394.11c1.39,1.42,5.43,3.45,9.76,3.45,6.58,0,10.38-3.51,10.38-7.13,0-9.05-14.22-7.56-14.22-13.07,0-2.39,2.45-3.51,5.11-3.51a9.74,9.74,0,0,1,6,2.13l2.05-2.37A13.44,13.44,0,0,0,714,371c-4.78,0-9.15,2.29-9.15,6.65,0,7.8,14.09,6.18,14.09,12.87C718.89,393,716.52,394.62,713.05,394.62Z" transform="translate(-643.1 -369.89)"/><polygon class="a" points="46.29 4.04 44.55 0 32.81 24.68 34.55 28.72 46.29 4.04"/></svg>
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
                    <p class="modal-address mb-0">2537 Broad Avenue, Memphis, TN 38112</p>
                </div>
                <div class="col-auto pt-3">
                    <button @click="handleSubmit" type="button" class="btn btn-gold-outline press">SEND MESSAGE</button>
                </div>
            </div>
        </form>

        <div id="thank-you" v-else>
            <p>Thank You</p>
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
                    message: this.email,
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

                        }, 2500)
                    });
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped>
    #thank-you{
        text-align: center;
        font-size: 26px;
    }
</style>
