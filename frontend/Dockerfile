FROM node:24-alpine

WORKDIR /app

EXPOSE 5173

# รันคำสั่งทั้งหมดเมื่อ Container เริ่มทำงาน (ใช้ sh -c เพื่อรันแบบ Shell script)
CMD sh -c "\
    if [ ! -f package.json ]; then \
    echo 'กำลังสร้างโปรเจกต์ Vue...'; \
    npm install -g create-vite && \
    create-vite temp-vue --template vue && \
    cp -a temp-vue/. . && \
    rm -rf temp-vue && \
    npm install; \
    else \
    echo 'พบโปรเจกต์อยู่แล้ว ข้ามการสร้างใหม่...'; \
    fi && \
    npm run dev -- --host"