<template>
 <!-- Modal -->
 <div>
  <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          Bạn có chắc muốn xóa ?
        </div>
        <div class="modalFooter">
          <button type="button" class="btn btn-primary btnF">Delete</button>
          <button type="button" class="btn btn-secondary btnF" data-dismiss="modal">Close</button>
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
#delModal {
  .modal-body {
    padding: 16px 16px 0;
  }
  .modalFooter {
    text-align: end;
    padding: 0 16px 16px;
    .btnF {
      padding: 0 5px;
    }
  }
}
</style>
