<template>
  <div class="card bg-success border-0">
    <div class="py-3 px-3 text-white">
      <div class="display-4">
        GIFT CERTIFICATE
      </div>
      <hr>
      <div class="row mb-4">
        <div class="col-md-2 border-right border-white">
          <div class="display-1">
            <font-awesome-icon icon="gifts" />
          </div>
        </div>
        <div class="col-md-6 border-right border-white">
          <div class="mb-3">
            <div>
              With a value of:
            </div>
            <div class="display-2">
              {{ business.price }} DKK
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <div>
              Valid for:
            </div>
            <div class="h3">
              {{ business.service }}
            </div>
          </div>
          <div class="mb-3">
            <div>
              In:
            </div>
            <div class="h3">
              {{ business.name }}
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-light btn-lg btn-block" @click="print">Download</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    business: {
      type: Object,
      default: () => ({
        name: '',
        description: '',
        service: '',
        price: '',
        created_at: ''
      })
    }
  },
  methods: {
    print () {
      window.print()
    }
  }
}
</script>