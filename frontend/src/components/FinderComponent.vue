<template>
  <!-- Header Section -->
  <div class="row mb-5 text-center">
    <div class="col">
      <h1 class="display-5 fw-bold text-primary mb-3">
        <i class="fas fa-utensils me-2"></i>Restaurant Finder
      </h1>
      <p class="text-muted lead">
        Find the restaurant you're interested in from our database.
      </p>
    </div>
  </div>

  <!-- Search Bar Section -->
  <div class="row justify-content-center mb-3">
    <div class="col-md-8 col-lg-6">
      <div class="input-group input-group-lg shadow-sm">
        <span class="input-group-text bg-white border-end-0">
          <i class="fas fa-search text-muted"></i>
        </span>
        <!-- ใช้งาน v-model เพื่อผูกค่าตัวแปร keyword -->
        <input
          type="text"
          class="form-control border-start-0"
          placeholder="name..."
          v-model="keyword"
        />
        <button class="btn btn-primary px-4" @click="search">
          <span>Search</span>
        </button>
      </div>
    </div>
  </div>

  <div class="row justify-content-center mb-3">
    <div class="spinner-border text-primary" v-if="loading"></div>
  </div>

  <div v-if="errorMessage" class="alert alert-danger alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong> {{ errorMessage }} </strong>
  </div>

  <div class="row">
    <div class="col">
      <table
        class="table table-hover table-bordered table-striped"
        v-if="restaurants.length > 0"
      >
        <thead class="table-dark">
          <tr>
            <th>name</th>
            <th>position</th>
            <th>address</th>
            <th>province</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in restaurants" :key="item.id">
            <td>{{ item.restaurant_name }}</td>
            <td>
              {{ item.restaurant_latitude }}, {{ item.restaurant_longitude }}
            </td>
            <td>{{ item.restaurant_address }}</td>
            <td>{{ item.restaurant_province }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div
    v-if="restaurants.length === 0 && hasSearched"
    class="text-center text-muted py-5"
  >
    <i class="fas fa-box-open fa-3x mb-3"></i>
    <p>ไม่พบข้อมูลร้านอาหารที่คุณค้นหา</p>
  </div>
</template>

<script setup>
// 1. นำเข้า Composition API
import { ref, onMounted, watch } from "vue";
import axios from "axios";

// 2. ประกาศตัวแปร Reactive
const restaurants = ref([]);
const errorMessage = ref("");
const loading = ref(false);
const keyword = ref(""); // ตัวแปรสำหรับเก็บคำค้นหาที่ผูกกับ v-model
const hasSearched = ref(false);
let debounceTimer = null;

// 3. ฟังก์ชันดึงข้อมูล (รองรับการส่ง parameter)
const getData = async (searchQuery = "") => {
  try {
    loading.value = true;
    errorMessage.value = ""; // เคลียร์ error เก่าทิ้งก่อนเริ่มค้นหาใหม่

    // ใช้ axios params ส่ง Query String ไปให้ API
    // จะได้ URL ประมาณนี้: http://localhost:8081/api/restaurants?name=ค่าที่พิมพ์
    const response = await axios.get("http://localhost:8081/api/restaurants", {
      params: {
        name: searchQuery,
      },
    });

    restaurants.value = response.data.data;
  } catch (error) {
    console.error(error);
    errorMessage.value = "เกิดข้อผิดพลาดในการดึงข้อมูล กรุณาติดต่อผู้ดูแลระบบ";
    restaurants.value = []; // เคลียร์ข้อมูลตารางหากเกิด error
  } finally {
    loading.value = false;
  }
};

watch(keyword, (newValue) => {
  clearTimeout(debounceTimer);

  debounceTimer = setTimeout(() => {
    hasSearched.value = true;
    getData(newValue);
  }, 500);
});

// 4. ฟังก์ชันสำหรับปุ่ม Search
const search = () => {
  // เมื่อกดค้นหา ให้เรียก getData และโยนคำที่ผู้ใช้พิมพ์ลงไป
  hasSearched.value = true;
  getData(keyword.value);
};

// 5. Lifecycle Hook ทำงานตอนเปิดหน้าเว็บครั้งแรก
onMounted(() => {
  getData(); // ดึงข้อมูลทั้งหมดมาโชว์ก่อน (แบบไม่มี keyword)
});
</script>
<!-- <script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

export default {
  name: "FinderComponent",
  setup() {
    const restaurants = ref([]);
    const errorMessage = ref("");
    const loading = ref(false);
    const keyword = ref("");

    const getData = async (searchQuery = "") => {
      try {
        loading.value = true;
        errorMessage.value = "";
        const response = await axios.get(
          "http://localhost:8081/api/restaurants",
          {
            params: {
              name: searchQuery,
            },
          },
        );
        restaurants.value = response.data.data;
      } catch (error) {
        //400,500
        console.log(error.response.status);
        errorMessage.value = "เกิดข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ";
        restaurants.value = [];
      } finally {
        loading.value = false;
      }
    };

    const search = () => {
      getData(keyword.value);
    };

    onMounted(() => {
      getData();
    });

    return {
      restaurants,
      errorMessage,
      loading,
    };
  },
};
</script> -->

<style scoped>
/* เพิ่มเอฟเฟกต์ตอนนำเมาส์ไปชี้ที่การ์ด */
.restaurant-card {
  transition:
    transform 0.2s ease-in-out,
    box-shadow 0.2s ease-in-out;
  cursor: pointer;
}
.restaurant-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
</style>
