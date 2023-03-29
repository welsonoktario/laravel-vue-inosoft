<script setup lang="ts">
import AtomicSectionTitle from '@/Components/AtomSectionTitle.vue'
import ComponentTable, { RowProps } from '@/Components/ComponentTable.vue'
import { onMounted, ref } from 'vue'
import { useStore } from 'vuex'

const store = useStore()
const columns = ref<string[]>()
const rows = ref<RowProps[][]>()

onMounted(() => {
  store.dispatch('loadData').then(() => {
    columns.value = [
      'Description',
      'Qty',
      'UOM',
      'Unit Price',
      'Discount (%)',
      'VAT (%)',
      '',
      'Currency',
      'VAT Amount',
      'Sub Total',
      'Total',
      'Charge To',
      ''
    ]

    rows.value = [
      [
        {
          type: 'input-text',
          value: {
            placeholder: 'Description',
            value: ''
          }
        },
        {
          type: 'input-number',
          value: {
            placeholder: 'Qty',
            value: ''
          }
        },
        {
          type: 'select',
          value: {
            selected: 'shp',
            options: store.getters.getUoms
          }
        },
        {
          type: 'input-number',
          value: {
            placeholder: 'Unit Price',
            value: ''
          }
        },
        {
          type: 'input-number',
          value: {
            placeholder: 'Discount (%)',
            value: ''
          }
        },
        {
          type: 'input-number',
          value: {
            placeholder: 'VAT (%)',
            value: ''
          }
        },
        {
          type: 'svg',
          value: {}
        },
        {
          type: 'select',
          value: {
            selected: 'usd',
            options: store.getters.getCurrencies
          }
        },
        { type: 'text', value: '0.00' },
        { type: 'text', value: '0.00' },
        { type: 'text', value: '0.00' },
        {
          type: 'select',
          value: {
            selected: 'null',
            options: store.getters.getChargeTo
          }
        },
        {
          type: 'button',
          value: {
            text: '—',
            variant: 'secondary'
          }
        }
      ],
      [
        {
          type: 'input-text',
          value: {
            placeholder: 'Description',
            value: ''
          }
        },
        {
          type: 'input-number',
          value: {
            placeholder: 'Qty',
            value: ''
          }
        },
        {
          type: 'select',
          value: {
            selected: 'shp',
            options: store.getters.getUoms
          }
        },
        {
          type: 'input-number',
          value: {
            placeholder: 'Unit Price',
            value: ''
          }
        },
        {
          type: 'input-number',
          value: {
            placeholder: 'Discount (%)',
            value: ''
          }
        },
        {
          type: 'input-number',
          value: {
            placeholder: 'VAT (%)',
            value: ''
          }
        },
        {
          type: 'svg',
          value: {}
        },
        {
          type: 'select',
          value: {
            selected: 'aed',
            options: store.getters.getCurrencies
          }
        },
        { type: 'text', value: '0.00' },
        { type: 'text', value: '0.00' },
        { type: 'text', value: '0.00' },
        {
          type: 'select',
          value: {
            selected: 'null',
            options: store.getters.getChargeTo
          }
        },
        {
          type: 'button',
          value: {
            text: '—',
            variant: 'secondary'
          }
        }
      ]
    ]
  })
})
</script>

<template>
  <div class="mt-4">
    <AtomicSectionTitle>
      Cost Detail
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
    </AtomicSectionTitle>
    <ComponentTable :columns="columns" :rows="rows" />
  </div>
</template>
