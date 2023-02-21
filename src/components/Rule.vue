<template>
  <div>
    <span>{{ content.selecttype }}</span>
    <div :class="content.selecttype"></div>
  </div>
</template>

<script>
export default {

  mounted: function () {
    console.log(this.content);
  }
};
</script>

<style lang="less" scoped>

span {
  font-style: italic;
  color: grey;
}
.interspace {
  margin: 0 0 2rem;
}

.rule {
  width: 100%;
  height: 1px;
  border: 0 solid grey;
  border-top-width: 1px;
  margin: 2rem 0;
  padding: 0;
  display: block;
}
</style>
