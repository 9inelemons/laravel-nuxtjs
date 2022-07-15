<!-- Please remove this file from your project -->
<template>
  <h1>{{ data }}</h1>
</template>

<script>
export default {
  name: 'NuxtTutorial',

  data () {
    return {
      data: '',
    }
  },
  async fetch() {
    const res = await this.$axios.get('/test')
    this.data = res.data.message
  },
}
</script>
