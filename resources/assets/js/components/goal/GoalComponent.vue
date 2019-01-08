<template>
  <div class="height">
   <HeaderComponent title-header="Mục tiêu"/>
   <div  id="goal" class="clean">
    <div class="tab">
      <button class="tablinks" v-bind:class="{ active: isActive}" id="all" v-on:click="openCity('all', 'All')">All</button>
      <button class="tablinks" id="doing" v-on:click="openCity('doing', 'Doing')">Doing</button>
      <button class="tablinks" id="done" v-on:click="openCity('done', 'Done')">Done</button>
      <div class="block-button button-style1" 
      data-toggle="modal" data-target="#createModal" title="Tạo mục tiêu mới">
      <a href="#" class="button">
        <i class="fas fa-pencil-alt"></i>
      </a>
    </div>
  </div>

  <div id="All" class="tabcontent">
    <div class="row">
      <div class="col-lg-6 col-12">
        <GoalContentComponent/>
      </div>
    </div>
  </div>

  <div id="Doing" class="tabcontent">
    <h3>Paris</h3>
    <p>Paris is the capital of France.</p> 
  </div>

  <div id="Done" class="tabcontent">
    <h3>Tokyo</h3>
    <p>Tokyo is the capital of Japan.</p>
  </div>
  
</div>
<GoalDialogComponent/>
<DialogComponent/>
</div>
</template>
<script>
import HeaderComponent from '../header/HeaderComponent.vue';
import GoalContentComponent from './GoalContentComponent.vue';
import GoalDialogComponent from './GoalDialogComponent.vue';
import DialogComponent from '../share/DialogComponent.vue';
export default {
  data() {
    return {
      isActive: true
    };
  },
  components: {
    HeaderComponent,
    GoalContentComponent,
    GoalDialogComponent,
    DialogComponent
  },
  methods: {
    createGoal() {},
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
