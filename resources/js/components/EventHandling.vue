<template>
  <div class="event-handling">
    <form @submit.prevent="sayWelcome">
      <button type="submit">Submit</button>
    </form>
    <div @click="alertHello">Current Number: {{ counter }}</div>
    <button @click="increaseCounter(50)">CLick</button>
  </div>
</template>

<script>
export default {
  created: function() {
    console.log(this);
  },
  data() {
    return {
      counter: 0
    };
  },
  methods: {
    sayWelcome() {
      alert(1);
    },
    increaseCounter(number) {
      this.counter += number;
    },
    alertHello() {
      alert("Hello");
    },
    alertWelcome() {
      alert("Welcome");
    }
  }
};
</script>

<style lang="scss" scoped>
</style>