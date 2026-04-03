FROM node:24-alpine

WORKDIR /app

EXPOSE 5173

# ปรับปรุง: ให้รัน npm install เสมอก่อนรันเซิร์ฟเวอร์
CMD sh -c "\
    if [ ! -f package.json ]; then \
    echo 'กำลังสร้างโปรเจกต์ Vue...'; \
    npm install -g create-vite && \
    create-vite temp-vue --template vue && \
    cp -a temp-vue/. . && \
    rm -rf temp-vue; \
    else \
    echo 'พบโปรเจกต์อยู่แล้ว ข้ามการสร้างใหม่...'; \
    fi && \
    npm install && \
    npm run dev -- --host"