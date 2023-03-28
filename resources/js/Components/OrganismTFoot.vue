<script setup lang="ts">
import AtomButton from './AtomButton.vue'
import AtomInput from './AtomInput.vue'
import AtomTD from './AtomTD.vue'
</script>

<template>
  <tfoot>
    <tr>
      <AtomTD :colspan="7" :rowspan="2">
        Exchange Rate 1 USD =
        <AtomInput value="3.6725" />
        AED
      </AtomTD>
      <AtomTD classes="bg-stone-200 pl-4"> AED in Total </AtomTD>
      <AtomTD classes="bg-stone-200"> 0.00 </AtomTD>
      <AtomTD classes="bg-stone-200"> 0.00 </AtomTD>
      <AtomTD classes="bg-stone-200"> 0.00 </AtomTD>
      <AtomTD :rowspan="2" />
      <AtomTD :rowspan="2">
        <AtomButton variant="primary"> &#65291; </AtomButton>
      </AtomTD>
    </tr>
    <tr>
      <AtomTD classes="bg-stone-200"> USD in Total </AtomTD>
      <AtomTD classes="bg-stone-200"> 0.00 </AtomTD>
      <AtomTD classes="bg-stone-200"> 0.00 </AtomTD>
      <AtomTD classes="bg-stone-200"> 0.00 </AtomTD>
    </tr>
  </tfoot>
</template>
