<template>
  <div>
    <ComponentB />
    <div class="inline-flex justify-end gap-4 w-full p-6">
      <AtomButton variant="clear">Cancel</AtomButton>
      <AtomButton variant="outline">Save as Draft</AtomButton>
      <AtomButton>Submit</AtomButton>
    </div>
  </div>
</template>

<script setup lang="ts">
import AtomButton from './Components/AtomButton.vue'
import ComponentB from './Components/ComponentB.vue'
</script>
