<script setup lang="ts">
defineProps({
  type: {
    type: String,
    default: 'text',
    required: false
  },
  placeholder: {
    type: String,
    default: '',
    required: false
  },
  value: {
    type: [String, Number],
    default: '',
    required: false
  }
})
</script>

<template>
  <!-- Start AtomInput -->
  <input
    class="rounded border border-stone-200 bg-stone-100 py-2 px-3 text-stone-700 placeholder:text-stone-400"
    :class="{
      'w-24': type === 'number',
      'w-28': type === 'text'
    }"
    :type="type"
    :value="value"
    :placeholder="placeholder"
  />
  <!-- End AtomInput -->
</template>
