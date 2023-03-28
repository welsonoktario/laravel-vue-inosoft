<script setup lang="ts">
defineProps({
  colspan: {
    type: Number,
    required: false,
    default: 1
  },
  rowspan: {
    type: Number,
    required: false,
    default: 1
  },
  classes: {
    type: String,
    required: false,
    default: ''
  }
})
</script>

<template>
  <td
    :colspan="colspan"
    :rowspan="rowspan"
    class="border-b py-3 px-1 first:pl-4 last:pr-4"
    :class="classes"
  >
    <slot></slot>
  </td>
</template>
