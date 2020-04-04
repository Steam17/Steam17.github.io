<template>
    <div class="container">
        <p>
          A gift card (or money ;)) will give you an opportunity to support your business crush during these tough times. And then - receive a wonderful service from your beloved local business.
        </p>
        <div>
          <div class="row">
            <div class="col-4">
              <div class="card" style="width: 18rem;">
                <a :href="`/business/${category}`">
                  <div class="card-body">
                    <img src="" class="card-img-top" alt="">
                    <p>
                      Hola
                    </p>
                  </div>
                </a>
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
