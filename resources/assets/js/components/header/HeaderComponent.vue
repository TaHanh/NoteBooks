<template>
    <header id="header">
        <div id="title-header">
            <i>{{titleHeader}}</i>
        </div>
    </header>
</template>
<script>
export default {
  props: ['titleHeader']
};
</script>
<style lang="scss" scoped>
#header {
  font-family: 'Playfair Display', serif;
  width: 100%;
  background: #5dcdb4;
  color: #fff;
  font-size: 25px;
  float: right;
  display: inline-block;
  transition: width 0.5s;
  line-height: 50px;
  #title-header {
    padding: 0 16px;
    text-transform: capitalize;
  }
}
</style>

