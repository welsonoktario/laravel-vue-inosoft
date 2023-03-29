<template>
  <div class="bg-white px-8 py-12">
    <ComponentA />
    <ComponentB />
  </div>
  <div class="inline-flex justify-end gap-4 w-full p-6">
    <AtomButton variant="clear">Cancel</AtomButton>
    <AtomButton variant="outline">Save as Draft</AtomButton>
    <AtomButton variant="primary">Submit</AtomButton>
  </div>
</template>

<script setup lang="ts">
import AtomButton from '@/Components/AtomButton.vue'
import ComponentA from '@/Components/ComponentA.vue'
import ComponentB from '@/Components/ComponentB.vue'
</script>
