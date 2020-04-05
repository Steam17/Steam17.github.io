<template>
    <div class="container py-5">
      <div>
        <div class="h3 text-center mb-5">
          Choice the business you want to support.
        </div>
      </div>
      <div>
        <div class="row">
          <div
            v-for="(business, index) in businesses"
            :key="`business-${index}`"
            class="col-4 mb-3">
            <div class="card hover h-100">
              <img :src="`/img/business/${business.location_id}-${business.category_id}-${index + 1}.jpg`" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">{{ business.name }}</h5>
                <p class="card-text">{{ business.description }}</p>
                <div class="card-text mb-3">
                  <span class="text-secondary">Service:</span> {{ business.service }}
                </div>
                <div class="d-flex justify-space-between mb-3">
                  <div>
                    {{ business.price }} DKK
                  </div>
                </div>
                <a :href="`/payment/${business.id}`" class="stretched-link btn btn-primary">Buy it!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
  export default {
    props: {
      businesses: {
        type: Array,
        default: () => []
      }
    }
  }
</script>
