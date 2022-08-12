<template>
  <Link
    :href="route('posts.upVote', slug)"
    method="post"
    as="button"
    type="button"
    class="text-gray-400 hover:text-blue-400 flex justify-center my-2"
    preserve-scroll
    ><svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-6 w-6"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
      stroke-width="2"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M5 10l7-7m0 0l7 7m-7-7v18"
      />
    </svg>
  </Link>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
  slug: String,
});
</script>
