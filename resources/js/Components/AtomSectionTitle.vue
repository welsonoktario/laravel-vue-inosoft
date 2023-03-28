<script setup lang="ts">
defineProps({
  title: {
    type: String,
    required: false,
    default: ''
  }
})
</script>

<template>
  <div
    class="border-x border-t px-4 mb-2 py-2 w-full inline-flex items-center text-emerald-500 text-xl"
  >
    {{ title }}
    <span>
      <svg
        class="ml-3 fill-none stroke-stone-500 stroke-2"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 21"
        width="24"
        height="24"
      >
        <path
          d="M6 9l6 6 6-6"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </span>
  </div>
</template>
