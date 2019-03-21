<template>
  <div>
    Testing here!
    <p v-if="id">Booking ID: {{ id }}</p>
    <p v-if="event_id">Event ID: {{ event_id }}</p>
  </div>
</template>

<script>
export default {
  props: {
    id: {
      type: Number,
      default: null
    },
    event_id: {
      type: Number,
      default: null
    }
  },
  mounted() {
    console.log("Booking Widget - Component Loaded!");
  }
};
</script>
