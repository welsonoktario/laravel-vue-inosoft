<script setup lang="ts">
import AtomTH from './AtomTH.vue'
import { PropType } from 'vue'

defineProps({
  columns: {
    type: Array as PropType<string[]>,
    required: false,
    default: () => []
  }
})

const columnKey = (index: number) => `col-${index}`
</script>

<template>
  <thead class="bg-stone-200">
    <tr>
      <AtomTH v-for="(column, index) in columns" :key="columnKey(index)" :text="column" />
    </tr>
  </thead>
</template>
