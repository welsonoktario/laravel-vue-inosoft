<script setup lang="ts">
import OrganismTFoot from './OrganismTFoot.vue'
import OrganismTBody from '@/Components/OrganismTBody.vue'
import OrganismTHead from '@/Components/OrganismTHead.vue'

const columns = [
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

const rows: Array<
  Array<{
    type: 'text' | 'input-text' | 'input-number' | 'select' | 'button' | 'svg'
    value: any
  }>
> = [
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
        options: [
          {
            value: 'shp',
            label: 'SHP'
          },
          {
            value: 'unit',
            label: 'Unit'
          }
        ]
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
        options: [
          {
            value: 'usd',
            label: 'USD'
          },
          {
            value: 'idr',
            label: 'IDR'
          },
          {
            value: 'aed',
            label: 'AED'
          }
        ]
      }
    },
    { type: 'text', value: '0.00' },
    { type: 'text', value: '0.00' },
    { type: 'text', value: '0.00' },
    {
      type: 'select',
      value: {}
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
        options: [
          {
            value: 'shp',
            label: 'SHP'
          },
          {
            value: 'unit',
            label: 'Unit'
          }
        ]
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
        options: [
          {
            value: 'usd',
            label: 'USD'
          },
          {
            value: 'idr',
            label: 'IDR'
          },
          {
            value: 'aed',
            label: 'AED'
          }
        ]
      }
    },
    { type: 'text', value: '0.00' },
    { type: 'text', value: '0.00' },
    { type: 'text', value: '0.00' },
    {
      type: 'select',
      value: {}
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
</script>

<template>
  <table class="table-auto border-collapse border-spacing-2 border w-full">
    <OrganismTHead :columns="columns" />
    <OrganismTBody :rows="rows" />
    <OrganismTFoot />
  </table>
</template>
