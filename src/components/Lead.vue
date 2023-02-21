<template>
  <div @dblclick.stop>
    <k-writer
      :inline="true"
      :marks="true"
      :placeholder="field('text').placeholder"
      :value="content.text"
      class="k-block-lead"
      :class="content.size"
      @input="update({ text: $event })"
    />
  </div>
</template>

<script>
export default {
  computed: {
    placeholder () {
      return 'Écrire un paragraphe …';
    }
  }
};
</script>

<style lang="less" scoped>
.k-writer {
  font-size: 1rem;

  &.canon {
    font-size: 1.75rem;
  }

  &.parangon {
    font-size: 1.5rem;
  }

  &.headline {
    font-size: 1.25rem;
  }

  &.lead {
    font-size: 1.125rem;
  }

  &.cicero {
    font-size: 1rem;
  }

  &.small-print {
    font-size: .875rem
  }

  &.pearl {
    font-size: .75rem
  }
}
</style>
