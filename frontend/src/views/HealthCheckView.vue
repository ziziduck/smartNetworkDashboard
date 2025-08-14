<script setup lang="ts">
import { ref, onMounted } from 'vue'
import axios from 'axios'

const message = ref('Loading...')

// 從 VITE_API_BASE_URL 去掉尾端的 /api，組出 /ping
const apiBase = (import.meta.env.VITE_API_BASE_URL || 'http://localhost:8080/api')
const pingUrl = apiBase.replace(/\/api\/?$/, '') + '/ping'

onMounted(async () => {
  try {
    const { data } = await axios.get(pingUrl, { timeout: 5000 })
    message.value = String(data)
  } catch (err) {
    console.error(err)
    message.value = 'API Error'
  }
})
</script>

<template>
  <div style="text-align:center; margin-top:2rem;">
    <h1>Health Check</h1>
    <p>{{ message }}</p>
  </div>
</template>

<style scoped>
h1 { color: #42b983; }
</style>
