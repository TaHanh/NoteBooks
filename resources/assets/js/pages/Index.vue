<template>
    <div id="">
        <div id="mySidenav" class="sidenav">
          <div class="closebtn" v-on:click="closeNav()">&times;</div>
          <div v-for="(item, index) in menu" :key="index">
              <router-link v-bind:to="{name : item.id}">{{item.name}}</router-link>
          </div>
        </div>
        <div class="limit">
        <span class="btnOpen" v-on:click="openNav()"><i class="fas fa-bars"></i></span>
          <div id="main" class="main">
            <router-view></router-view>
            <FooterComponent/>
          </div>
        </div>
    </div>
</template>
<script>
import HeaderComponent from '../components/header/HeaderComponent.vue';
import FooterComponent from '../components/footer/FooterComponent.vue';
export default {
  data() {
    return {
      menu: [
        {
          name: 'Mục tiêu',
          id: 'goal'
        },
        {
          name: 'Kế hoạch',
          id: 'plan'
        },
        // {
        //   name: 'Quản lý chi tiêu',
        // id: 'Goal',
        //   path: name + 'expense'
        // },
        {
          name: 'Thời khóa biểu',
          id: 'timetable'
        },
        {
          name: 'Sự kiện',
          id: 'event'
        },
        {
          name: 'Nhật ký',
          id: 'dialy'
        },
        {
          name: 'Thông tin cá nhân',
          id: 'user'
        },
        {
          name: 'Phản hồi',
          id: 'feedback'
        }
      ]
    };
  },
  components: {
    HeaderComponent,
    FooterComponent
  },

  methods: {
    openNav() {
      document.getElementById('mySidenav').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
      document.getElementById('title-header').style.paddingLeft = '16px';
    },
    closeNav() {
      document.getElementById('mySidenav').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
      document.getElementById('title-header').style.paddingLeft = '80px';
    }
  }
};
</script>
