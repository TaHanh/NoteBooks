<template>
    <div class="height">
        <HeaderComponent title-header="Kế hoạch"/>
        <div  class="plan clean">
          <div class="tab">
      <button class="tablinks" v-bind:class="{ active: isActive}" id="all" v-on:click="openCity('all', 'All')">Kế hoạch ngắn hạn</button>
      <button class="tablinks" id="long" v-on:click="openCity('long', 'Long')">Kế hoạch dài hạn</button>
      <div class="block-button button-style1" 
      data-toggle="modal" data-target="#createPlanModal" title="Tạo mục tiêu mới">
      <a href="#" class="button">
        <i class="fas fa-pencil-alt"></i>
      </a>
    </div>
  </div>
   <div id="All" class="tabcontent">
    <div class="row">
        <div class="col-6">
          <div class="perday">
            <div class="title-dialy">
          <router-link :to="{ name: 'plancontent', params: { id: 'view' } }">
              Tiêu đề mục tiêu  
          </router-link>
          <div class="done-goal" ata-toggle="tooltip"  title="Hoàn thành kế hoạch">
                <input id="option1" name="option1" type="checkbox"/>
                <label for="option1"></label>
            </div>
            </div>
            <div class="content">
              <ul>
                <li><a data-toggle="modal" data-target="#editPlanModal">Sửa</a></li>
                <li><a data-toggle="modal" data-target="#delModal" title="Tạo mục tiêu mới">Xóa</a></li>
              </ul>
              <p class="day-created">
                27/07/2016 - 
                27/07/2016
              </p>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div id="Long" class="tabcontent">
    <h3>Paris</h3>
    <p>Paris is the capital of France.</p> 
  </div>
      
    </div>
    <PlanDialogComponent  task=""/>
    <DialogComponent/>
    </div>
</template>
<script>
import HeaderComponent from '../header/HeaderComponent.vue';
import PlanDialogComponent from './PlanDialogComponent.vue';
import DialogComponent from '../share/DialogComponent.vue';
export default {
  components: {
    HeaderComponent,
    PlanDialogComponent,
    DialogComponent
  },
  data() {
    return {
      isActive: true
    };
  },
  methods: {
    openCity(evt, goalName) {
      this.isActive = false;
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName('tabcontent');
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = 'none';
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName('tablinks');
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(' active', '');
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(goalName).style.display = 'block';
      document.getElementById(evt).classList.add('active');
    }
  }
};
</script>

