<template>
  <div class="p-8">
    <AtomSelect
      :options="options"
      selected="1"
      @select-change="onSelectChange"
    />

    <!-- Start AtomInput -->
    <input
      class="rounded border border-stone-200 bg-stone-100 py-2 px-3 text-stone-700 placeholder:text-stone-400"
      type="number"
      value="2"
      placeholder="Halo"
    />
    <!-- End AtomInput -->

    <!-- Start AtomButton -->
    <button class="rounded bg-stone-300 px-3 py-2 font-bold text-stone-500">
      &mdash;
    </button>
    <!-- End AtomButton -->
  </div>
</template>

<script>
import AtomSelect from "./Components/AtomSelect.vue";

export default {
  components: { AtomSelect },
  data() {
    return {
      options: [
        {
          value: 1,
          label: "halo",
        },
        {
          value: 2,
          label: "hi",
        },
        {
          value: 3,
          label: "hey",
        },
        {
          value: 4,
          label: "hello",
        },
      ],
    };
  },
  methods: {
    onSelectChange(value) {
      console.log(value);
    },
  },
};
</script>
