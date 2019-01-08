<template>
   <!-- Modal -->
   <div>
       <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tạo mục tiêu mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Tiêu đề</label>
                    <input type="text" />
                    <label>Nội dung</label>
                    <textarea rows="3" >s</textarea>
                    <input type="checkbox" name="plan" />
                    <label >Thiết lập kế hoạch</label>
                    
                </div>
                <div class="modalFooter">
                    <button type="button" class="btn btn-primary btnF">Save</button>
                    <button type="button" class="btn btn-secondary btnF" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sửa mục tiêu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <textarea rows="5">as</textarea>
                </div>
                <div class="modalFooter">
                    <button type="button" class="btn btn-secondary btnF" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btnF">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

</template>
<script>
export default {};
</script>
<style lang="scss" scoped>
textarea {
  margin-top: 16px;
}
</style>
