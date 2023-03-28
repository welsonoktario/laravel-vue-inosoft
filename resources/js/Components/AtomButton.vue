<script setup lang="ts">
import { computed } from 'vue'

export interface AtomButtonProps {
  variant: 'primary' | 'secondary' | 'outline' | 'clear'
  class?: string
}

const props = withDefaults(defineProps<AtomButtonProps>(), {
  variant: 'primary',
  class: ''
})

const classObject = computed(() => ({
  'bg-emerald-500 text-white': props.variant === 'primary',
  'bg-stone-200 text-stone-500': props.variant === 'secondary',
  'bg-white border border-stone-200': props.variant === 'outline',
  'text-stone-900': props.variant === 'clear'
}))
</script>

<template>
  <!-- Start AtomButton -->
  <button class="rounded px-3 py-2" :class="classObject">
    <slot></slot>
  </button>
  <!-- End AtomButton -->
</template>
