<template>
 <!-- Modal -->
 <div>
     <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tạo chi tiết từng công việc</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Tên công việc</label>
                    <input type="text" name="name"/>
                    <label>Thời gian bắt đầu</label>
                    <input type="datetime-local" />
                    <label>Thời gian kết thúc</label>
                    <input type="datetime-local" />
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Sửa công việc</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Tên công việc</label>
                    <input type="text" :value="task.name"/>
                    <label>Thời gian bắt đầu</label>
                    <input type="datetime-local"  :value="task.dateStart"/>
                    <label>Thời gian kết thúc</label>
                    <input type="datetime-local" :value="task.dateEnd" />
                </div>
                <div class="modalFooter">
                    <button type="button" class="btn btn-primary btnF">Save changes</button>
                    <button type="button" class="btn btn-secondary btnF" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createPlanModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered plandialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tạo kế hoạch</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Tên kế hoạch</label>
                    <input type="text"/>
                    <label>Loại kế hoạch</label>
                    <select>
                        <option value="short">Ngắn hạn</option>
                        <option value="long">Dài hạn</option>
                    </select>
                    <table>
                        <tr>
                           <th>Danh sách công việc</th>
                        <th class="td">Thời gian bắt đầu</th>
                        <th class="td">Thời gian kết thúc</th> 
                        </tr>
                        <tr>
                            <td><input type="text" class="border"/></td>
                            <td class="td"><input type="date"/></td>
                            <td class="td"><input type="date"/></td>
                        </tr>
                    </table>
                    
                </div>
                <div class="modalFooter">
                    <button type="button" class="btn btn-primary btnF">Save</button>
                    <button type="button" class="btn btn-secondary btnF" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editPlanModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered plandialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tạo kế hoạch</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Tên kế hoạch</label>
                    <input type="text"/>
                    <label>Loại kế hoạch</label>
                    <select>
                        <option value="short">Ngắn hạn</option>
                        <option value="long">Dài hạn</option>
                    </select>
                    
                </div>
                <div class="modalFooter">
                    <button type="button" class="btn btn-primary btnF">Save</button>
                    <button type="button" class="btn btn-secondary btnF" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
 </div>

</template>
<script>
export default {
  props: ['task']
};
</script>
<style lang="scss" scoped>
#createPlanModal,
#editPlanModal {
  .modal-header {
    color: #000;
    padding: 10px 16px 8px;
  }
  .modal-body {
    padding: 0 20px 16px;
    label {
      padding: 16px 0 4px;
    }
    input {
      width: 100%;
      border-radius: 5px;
      padding: 5px 8px;
    }
    select {
      border-radius: 5px;
      margin-left: 15px;
    }
  }
}
</style>

