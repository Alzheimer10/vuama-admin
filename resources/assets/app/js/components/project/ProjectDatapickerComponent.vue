<template>
  <div class="block">
    <p>Component value：{{ value13 }}</p>
    <el-date-picker
      v-model="value13"
      type="daterange"
      start-placeholder="Start date"
      end-placeholder="End date"
      :default-time="['00:00:00', '23:59:59']">
    </el-date-picker>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        dataPoroject: []
      };
    }
  };
</script>