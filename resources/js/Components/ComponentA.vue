<script setup lang="ts">
import AtomButton from './AtomButton.vue'
import AtomInput from './AtomInput.vue'
import AtomSelect from '@/Components/AtomSelect.vue'
</script>

<template>
  <div class="grid grid-cols-10 w-full p-4 gap-4 border">
    <div class="col-span-2">
      <AtomSelect selected="1" :options="[{ value: 1, label: 'Logistic Instruction' }]">
        <svg
          class="left-2 text-emerald-500 pointer-events-none absolute inset-y-0 my-auto self-center fill-none stroke-emerald-500 stroke-2"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 21"
          width="28"
          height="28"
        >
          <path
            d="M7 19a2 2 0 100-4 2 2 0 000 4zM17 19a2 2 0 100-4 2 2 0 000 4z"
            stroke-miterlimit="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></path>
          <path
            d="M14 17V6.6a.6.6 0 00-.6-.6H2.6a.6.6 0 00-.6.6v9.8a.6.6 0 00.6.6h2.05M14 17H9.05M14 9h5.61a.6.6 0 01.548.356l1.79 4.028a.6.6 0 01.052.243V16.4a.6.6 0 01-.6.6h-1.9M14 17h1"
            stroke-linecap="round"
          />
        </svg>
      </AtomSelect>
    </div>
    <div class="col-span-8">
      <AtomButton variant="secondary" :circle="true"> Draft </AtomButton>
    </div>

    <div class="col-start-3 col-span-3">
      <label class="block">Assigned Vehicle</label>
      <AtomSelect
        selected="1"
        :options="[{ value: 1, label: 'Amarit & Associates Logistics Co Ltd' }]"
      />
    </div>
    <div class="col-span-1">
      <label class="block">Attention Of</label>
      <AtomInput placeholder="Attention of" value="John Smith" block />
    </div>
    <div class="col-span-1">
      <label class="block">Quotation No.</label>
      <AtomInput placeholder="Quotation no." value="ABC-113-01" block />
    </div>
    <div class="col-span-1">
      <label class="block">Invoice To</label>
      <AtomSelect selected="1" :options="[{ value: 1, label: 'MITO' }]" />
    </div>
    <div class="col-span-2">
      <label class="block">Customer - Contact</label>
      <AtomSelect selected="1" :options="[{ value: 1, label: 'ADNOC-ONSHORE' }]" />
    </div>

    <div class="col-start-3 col-span-6">
      <label class="block">Vendor Address</label>
      <AtomInput
        placeholder="Vendor address"
        value="Marubeni-Itochu Tublars Asia Pte Ltd (2 Shenton Way, SGX Centre 1, #07-01 (S) (068804)"
        block
      />
    </div>
    <div class="col-span-2">
      <label class="block">Customer PO No.</label>
      <AtomSelect selected="1" :options="[{ value: 1, label: 'A123XXHTA0192' }]" />
    </div>
  </div>
</template>
