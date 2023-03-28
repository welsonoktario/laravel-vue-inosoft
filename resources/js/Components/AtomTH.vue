<script setup lang="ts">
defineProps({
  text: {
    type: String,
    required: false,
    default: ''
  }
})
</script>

<template>
  <th class="font-normal text-stone-800 text-left px-1 py-2 first:pl-4 last:pr-4">{{ text }}</th>
</template>
