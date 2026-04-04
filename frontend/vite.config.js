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
    host: '0.0.0.0', // อนุญาตให้เชื่อมต่อจากภายนอก Docker ได้
    port: 5173,      // พอร์ตเริ่มต้นของ Vite
    watch: {
      usePolling: true, // สำคัญมากสำหรับ Docker! บังคับให้เช็กการเปลี่ยนแปลงไฟล์
      interval: 1000,   // เช็กทุกๆ 1 วินาที (ลดภาระเครื่อง)
    },
    hmr: {
      host: 'localhost',
      protocol: 'ws',
    }
  }
  // ----------------------------------------
})
