import { fileURLToPath, URL } from 'node:url'
import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    }
  },
  // --- เพิ่มบล็อก server ด้านล่างนี้เข้าไปครับ ---
  server: {
    host: true,
    watch: {
      usePolling: true, // บังคับให้ Vite ตรวจสอบการเปลี่ยนแปลงไฟล์ใน Docker
    }
  }
  // ----------------------------------------
})
