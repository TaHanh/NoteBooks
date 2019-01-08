<template>
  <div class="height">
    <HeaderComponent title-header="Nhật ký"/>
    <div  id="dialy" class="clean">
      <div class="row">
        <div class="col-12">
          <router-link :to="{ name: 'DialyContent', params: { id: 'create' } }">
            <div class="block-button button-style1" title="Tạo mục tiêu mới">
              <a href="#" class="button">
                <i class="fas fa-pencil-alt"></i>
              </a>
            </div>
          </router-link>
        </div>
        <div class="col-lg-6 col-12">
          <div class="perday">
            <div class="title-dialy">
              <router-link :to="{ name: 'DialyContent', params: { id: 'view' } }">
              Tiêu đề mục tiêu  
              </router-link>
            </div>
            <div class="content">
              <ul>
                <li><router-link :to="{ name: 'DialyContent', params: { id: 'edit' } }">Sửa</router-link></li>
                <li><a data-toggle="modal" data-target="#delModal" title="Tạo mục tiêu mới">Xóa</a></li>
              </ul>
              <p class="day-created">
                27/07/2016
              </p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <DialogComponent/>
  </div>
</template>
<script>
import HeaderComponent from '../header/HeaderComponent.vue';
import DialogComponent from '../share/DialogComponent.vue';
export default {
  components: {
    HeaderComponent,
    DialogComponent
  }
};
</script>

