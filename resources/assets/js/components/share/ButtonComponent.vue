<template>
  <button class="shiny-btn">{{name}}</button>
</template>
<script>
export default {
  props: ['name']
  //   computed: {
  //     click: function() {
  //       if (this.method != null) {
  //         return this.method;
  //       }

  //       return alert('Error');
  //     }
  //   }
};
</script>
<style lang="scss" scoped>
.shiny-btn {
  color: white !important;
  font-weight: bold;
  padding: 5px 15px !important;
  background-color: #7681b9 !important;
  transition: transform 100ms cubic-bezier(0.68, -0.55, 0.265, 1.55),
    background-position 500ms cubic-bezier(0.68, -0.55, 0.265, 1.55), box-shadow 500ms linear !important;
  background-image: url('data:image/svg+xml;utf8,<?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"   width="1296px" height="768px" viewBox="0 0 1296 768" enable-background="new 0 0 1296 768" xml:space="preserve"><g><polygon fill="#8694D1" points="766.6,1.2 -0.2,768 200.7,768 967.5,1.2   "/></g><g><polygon fill="#8694D1" points="1094.8,1.2 328,768 528.9,768 1295.7,1.2   "/></g></svg>') !important;
  background-size: contain !important;
  background-position: -500px center !important;
  background-repeat: no-repeat !important;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  display: block;
  outline: none;
  border: none;
  text-transform: uppercase;
  border-radius: 5px;
  font-size: 13px;
}
.shiny-btn:hover {
  transform: scale(1.05) !important;
  background-position: -20px !important;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23) !important;
}
.btnCancel {
  background-color: #717171 !important;
  background-image: none !important;
}
</style>
