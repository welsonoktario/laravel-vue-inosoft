<script setup lang="ts">
export interface AtomSelectType {
  selected?: string | number
  options?: Array<{ value: string | number; label: string }>
}

withDefaults(defineProps<AtomSelectType>(), {
  selected: 'null',
  options: () => []
})

defineEmits(['selectChange'])
</script>

<template>
  <!-- Start AtomSelect -->
  <div class="relative w-fit rounded border border-stone-200 bg-stone-100 text-stone-700">
    <select
      :value="selected"
      class="z-10 w-full appearance-none bg-transparent py-2 pl-3 pr-8"
      @change="$emit('selectChange', $event.target)"
    >
      <option value="null" selected disabled>Select</option>
      <option v-for="(opt, index) in options" :key="`opt-${index}`" :value="opt.value">
        {{ opt.label }}
      </option>
    </select>

    <svg
      class="pointer-events-none absolute inset-y-0 right-2 my-auto self-center fill-none stroke-stone-500 stroke-2"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 21"
      width="16"
      height="16"
    >
      <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </div>
  <!-- End AtomSelect -->
</template>
