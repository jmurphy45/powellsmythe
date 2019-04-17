<template>
    <div class="container p-5">

        <div class="ps-div">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 28.72" width="35" height="13" style="fill: #414042"><path class="a" d="M647,387.34h2.53c8.13,0,11.89-3.41,11.89-8.31,0-5.77-5.64-7.56-11.93-7.56H643.1V397H647Zm0-13h3.51c4,0,6.82,1.56,6.82,4.7,0,3.31-2.9,5.4-7.88,5.4H647Z" transform="translate(-643.1 -369.89)"/><path class="a" d="M713.05,394.62a11.79,11.79,0,0,1-8-2.87L703,394.11c1.39,1.42,5.43,3.45,9.76,3.45,6.58,0,10.38-3.51,10.38-7.13,0-9.05-14.22-7.56-14.22-13.07,0-2.39,2.45-3.51,5.11-3.51a9.74,9.74,0,0,1,6,2.13l2.05-2.37A13.44,13.44,0,0,0,714,371c-4.78,0-9.15,2.29-9.15,6.65,0,7.8,14.09,6.18,14.09,12.87C718.89,393,716.52,394.62,713.05,394.62Z" transform="translate(-643.1 -369.89)"/><polygon class="a" points="46.29 4.04 44.55 0 32.81 24.68 34.55 28.72 46.29 4.04"/></svg>
        </div>

        <form>
            <div class="form-row">
                <div class="col-sm-6 pt-2">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="col-sm-6 pt-2">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" placeholder="Company">
                </div>
                <div class="col-sm-6 pt-2">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-sm-6 pt-2">
                    <label for="phone">Phone Number</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Phone">
                </div>
                <div class="col-sm-12 pt-2">
                    <label for="message">Message</label>
                    <textarea type="text" class="form-control" id="message" placeholder="Send Us A Note" rows="4"></textarea>
                </div>
                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
            </div>
            <div class="form-row pl-1">
                <button type="submit" class="btn btn-gold-outline press mt-3">SEND MESSAGE</button>
            </div>
        </form>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
