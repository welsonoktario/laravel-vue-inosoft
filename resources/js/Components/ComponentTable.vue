<script setup lang="ts">
import AtomButton from '@/Components/AtomButton.vue'
import AtomInput from '@/Components/AtomInput.vue'
import AtomSelect from '@/Components/AtomSelect.vue'
import AtomTD from '@/Components/AtomTD.vue'
import AtomTH from '@/Components/AtomTH.vue'

export interface RowProps {
  type: 'text' | 'input-text' | 'input-number' | 'select' | 'button' | 'svg'
  value: any
}

export interface OrganismTBodyProps {
  rows?: RowProps[][]
}

withDefaults(
  defineProps<{
    columns: string[]
    rows: RowProps[][]
  }>(),
  {
    columns: () => [],
    rows: () => []
  }
)

const columnKey = (index: number) => `col-${index}`
const rowKey = (index: number) => `tr-${index}`
const dataKey = (index: number) => `td-col-${index}`

const isDataType = (
  dataType: string,
  rowType: 'text' | 'input-text' | 'input-number' | 'select' | 'button' | 'svg'
) => dataType === rowType
</script>

<template>
  <table class="table-auto border-collapse border-spacing-2 border w-full">
    <thead class="bg-stone-200">
      <tr>
        <AtomTH v-for="(column, index) in columns" :key="columnKey(index)">
          {{ column }}
        </AtomTH>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(row, i) in rows" :key="rowKey(i)" class="my-3">
        <AtomTD v-for="(data, j) in row" :key="dataKey(j)">
          <AtomInput
            v-if="isDataType(data.type, 'input-text')"
            type="text"
            :placeholder="data.value.placeholder"
            :value="data.value.value"
            block
          />
          <AtomInput
            v-if="isDataType(data.type, 'input-number')"
            type="number"
            :placeholder="data.value.placeholder"
            :value="data.value.value"
            block
          />
          <AtomSelect
            v-if="isDataType(data.type, 'select')"
            :selected="data.value.selected"
            :options="data.value.options"
          />
          <AtomButton v-if="isDataType(data.type, 'button')" :variant="data.value.variant">
            {{ data.value.text }}
          </AtomButton>

          <svg
            v-if="isDataType(data.type, 'svg')"
            class="fill-none stroke-stone-500 stroke-3"
            width="32px"
            height="32px"
            viewBox="0 0 24 21"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M3 12h18m0 0l-8.5-8.5M21 12l-8.5 8.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <template v-if="isDataType(data.type, 'text')">{{ data.value }}</template>
        </AtomTD>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <AtomTD :colspan="7" :rowspan="2">
          Exchange Rate 1 USD =
          <AtomInput value="3.6725" />
          AED
        </AtomTD>
        <AtomTD classes="bg-stone-200 pl-4">AED in Total</AtomTD>
        <AtomTD classes="bg-stone-200">0.00</AtomTD>
        <AtomTD classes="bg-stone-200">0.00</AtomTD>
        <AtomTD classes="bg-stone-200">0.00</AtomTD>
        <AtomTD :rowspan="2"></AtomTD>
        <AtomTD :rowspan="2">
          <AtomButton variant="primary"> &#65291; </AtomButton>
        </AtomTD>
      </tr>
      <tr>
        <AtomTD classes="bg-stone-200">USD in Total</AtomTD>
        <AtomTD classes="bg-stone-200">0.00</AtomTD>
        <AtomTD classes="bg-stone-200">0.00</AtomTD>
        <AtomTD classes="bg-stone-200">0.00</AtomTD>
      </tr>
    </tfoot>
  </table>
</template>
