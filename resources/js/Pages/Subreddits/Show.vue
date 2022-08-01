<template>
  <h1>Subreddit {{ subreddit.name }} show page</h1>
</template>

<script setup>
defineProps({
  subreddit: Object(),
});
</script>
