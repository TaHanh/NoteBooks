<template>
<div class="height">
    <HeaderComponent title-header="Thông tin cá nhân"/>
    <div class="user">
        <div class="basic">
            <div class="row">
                <div class="col-lg-2 col-4">
                    <div class="avatar">
                        <img src="https://i.pinimg.com/originals/68/e9/6c/68e96c03ce5f25f48e50f939b0bd9155.jpg" />
                        <button class="change-avatar">Change avatar</button>
                    </div>
                </div>
                <div class="col-lg-10 col-8">
                    <h4>Username</h4>
                        <p>Email or phone</p> 
                </div>
            </div> 
        </div>
        <div class="detail">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-10">
                    <p>Username <span class="star">*</span></p>
                    <input type="text" required/>
                    <p>Full name</p>
                    <input type="text"/>
                    <p>Giới tính</p>
                    <select>
                        <option value="male">Nam</option>
                        <option value="female">Nữ</option>
                    </select>
                    <p>Ngày sinh</p>
                    <input type="date"/>
                </div>
                <div class="col-lg-6 col-10">
                    <p>Sở thích</p>
                    <textarea rows="2" type="text"/>
                    <p>Châm ngôn sống</p>
                    <textarea rows="2" type="text"/>
                    <p><a href="" data-toggle="modal" data-target="#changePassModal">Thay đổi mật khẩu</a></p>
                    <p><a href="" data-toggle="modal" data-target="#disModal">Vô hiệu hóa tài khoản</a></p>
                    
                </div>
                <div class="col-lg-12 col-10 px-5">
                    <br/>
                    <p>
                        <ButtonComponent name="SAVE"/>
                        <ButtonComponent name="Cancel"/>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="changePassModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <input type="text" placeholder="Mật khẩu cũ *" />
          <input type="text" placeholder="Mật khẩu mới *" />
          <input type="text" placeholder="Nhập lại mật khẩu mới *" />
        </div>
        <div class="modalFooter">
          <button type="button" class="btn btn-primary btnF">Save</button>
          <button type="button" class="btn btn-secondary btnF" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="disModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h5>Bạn có chắc chắn muốn vô hiệu hóa tài khoản ?</h5>
          Lý do bạn muốn vô hiệu hóa tài khoản là gì ?  <span class="star">*</span>
          <textarea rows="3" required/>
        </div>
        <div class="modalFooter">
          <button type="button" class="btn btn-primary btnF">Disable</button>
          <button type="button" class="btn btn-secondary btnF" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import HeaderComponent from '../header/HeaderComponent.vue';
import ButtonComponent from '../share/ButtonComponent.vue';
export default {
  components: {
    HeaderComponent,
    ButtonComponent
  }
};
</script>
<style lang="scss" scoped>
.row {
  width: 100%;
}
.star {
  color: red;
}
.user {
  padding: 16px 0;
  clear: both;
  .basic {
    .avatar {
      width: 100px;
      height: 100px;
      overflow: hidden;
      margin: auto;
      position: relative;
      img {
        width: 100%;
      }
      .change-avatar {
        display: none;
        cursor: pointer;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        border: none;
        font-size: 12px;
        background: #dee2e6;
        opacity: 0.8;
        outline: none;
      }
      &:hover {
        .change-avatar {
          display: block;
        }
      }
    }
  }
  .detail {
    padding: 16px;
    p {
      margin: 10px 0 5px 0;
    }
    input,
    textarea {
      width: 100%;
      border-radius: 5px;
    }
    select {
      border-radius: 5px;
      padding: 4px 8px;
    }
    button.shiny-btn {
      float: left;
      margin-right: 25px;
    }
    a {
      outline: none;
    }
  }
}
.modal-body {
  padding: 16px 24px 8px;
}
input {
  margin: 8px 0;
}
</style>
