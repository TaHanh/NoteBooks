<template>
    <div class="height">
        <!-- <div v-if="$route.params.id === 'create'"> -->
            <HeaderComponent :title-header='{title}'/>
            <div class="content-dialy">
                <div class="title">
                  {{obj.title}}
                  <input type="text" name="title" value="ABC"/>
                </div>
                <div class="content">
                  {{obj.content}}
                </div>
                <ButtonComponent name="Save"/>
            </div>
        <!-- </div>
        <div v-else-if="$route.params.id === 'view'"> 
            <HeaderComponent title-header="Nhật ký"/>-->
            <!-- <div class="content-dialy">
                <div class="title">
                  Tiêu đề 
                  <div class="date-content-dialy">27/05/2018</div>
                </div>
                <div class="content">
                  ABC
                </div>
                <ButtonComponent name="Save"/>
            </div>
        </div> -->
        <!-- <div v-else>
            <HeaderComponent title-header="Sửa nhật ký"/> -->
            <!-- <div class="content-dialy">
                <div class="title">
                  Tiêu đề 
                  <input type="text" name="title" value="ABC"/>
                </div>
                <div class="content">
                  ABC
                </div>
                <ButtonComponent name="Save"/>
                <ButtonComponent name="Cancel" class="btnCancel"
                data-toggle="modal" data-target="#delModal" />
            </div> -->
        <!-- </div> -->
        <DialogComponent/>
    </div>
</template>
<script>
import HeaderComponent from '../header/HeaderComponent.vue';
import ButtonComponent from '../share/ButtonComponent.vue';
import DialogComponent from '../share/DialogComponent.vue';
export default {
  data() {
    return {
      create: true,
      title: 'Viết nhật ký',
      obj: {
        title: ' ',
        content: ' '
      }
    };
  },
  mounted() {
    console.log(this.obj.title);
    const param = this.$route.params.id;
    if (param === 'view') {
      this.title_header = 'Xem nhật ký';
      this.obj.title = 'Title';
      this.obj.content = 'Content';
    } else {
      this.title_header = 'Sửa nhật ký';
      this.obj.title = 'Title';
      this.obj.content = 'Content';
    }
    // if (param === 'create') {
    //   this.create = true;
    // } else {
    //   this.create = false;
    // }
  },
  components: {
    HeaderComponent,
    ButtonComponent,
    DialogComponent
  }
};
</script>