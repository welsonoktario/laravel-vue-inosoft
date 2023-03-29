<script setup lang="ts">
export interface AtomInputProps {
  type?: string
  placeholder?: string
  value?: string | number
  block?: boolean
}

withDefaults(defineProps<AtomInputProps>(), {
  type: 'text',
  placeholder: '',
  value: '',
  block: false
})
</script>

<template>
  <!-- Start AtomInput -->
  <input
    class="rounded inline-block border border-stone-200 bg-stone-100 py-2 px-3 text-stone-700 placeholder:text-stone-400"
    :class="{
      'w-full': block,
      'w-28': !block
    }"
    :type="type"
    :value="value"
    :placeholder="placeholder"
  />
  <!-- End AtomInput -->
</template>
