<template>
  <div class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
          <div class="w-75 mb-5">
            <p class="text-center h5">
              A gift card <span class="text-secondary">or money ;)</span><br>
              will give you an opportunity to support your business crush during these tough times.<br>
              And then - receive a wonderful service from your beloved local business.
            </p>
          </div>
        </div>
        <div>
          <div class="h3 text-center mb-5">
            Select a category for the business you want to support.
          </div>
        </div>
        <div>
          <div class="row justify-content-center">
            <div
              v-for="(category, index) in categories"
              :key="`category-${index}`"
              class="col-4 mb-5">
              <div class="card h-100 hover">
                  <div class="card-body">
                    <p class="h5 font-weight-bold text-center">
                      {{ category.name }}
                    </p>
                    <a class="stretched-link" :href="`${location}/business/${category.id}`"></a>
                  </div>
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
        categories: {
          type: Array,
          default: () => []
        },
        location: {
          type: Number,
          default: null
        }
      }
    }
</script>
