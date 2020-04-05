<template>
    <div class="container">
      <div class="pt-5 pb-5">
        <div class="mb-5 text-center">
          <h2 class="h1 font-weight-bold">
            How does it work?
          </h2>
          <p>
            easy peasy lemon squeezy ;)
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 px-3 text-center mb-4">
            <div class="card py-4 border-0 h-100">
              <div class="mb-4 text-white display-4 d-flex justify-content-center">
                <div class="bg-primary py-3 px-3 rounded-circle" style="height:90px; width:90px;">
                  <font-awesome-icon icon="search" />
                </div>
              </div>
              <div class="px-3">
                <h5>
                  Find your business crush you’d like to support
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 px-3 text-center mb-4">
            <div class="card py-4 border-0 h-100">
              <div class="mb-4 text-white display-4 d-flex justify-content-center">
                <div class="bg-primary py-3 px-3 rounded-circle" style="height:90px; width:90px;">
                  <font-awesome-icon icon="donate" />
                </div>
              </div>
              <div class="px-3">
                <h5>
                  Decide on the amount you’d like to support with OR
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 px-3 text-center mb-4">
            <div class="card py-4 border-0 h-100">
              <div class="mb-4 text-white display-4 d-flex justify-content-center">
                <div class="bg-primary py-3 px-3 rounded-circle" style="height:90px; width:90px;">
                  <font-awesome-icon icon="credit-card" />
                </div>
              </div>
              <div class="px-3">
                <h5>
                  Buy a gift card from your B-crush
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
