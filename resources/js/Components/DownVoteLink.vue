<template>
  <Link
    :href="route('posts.downVote', slug)"
    method="post"
    as="button"
    type="button"
    class="text-gray-400 hover:text-red-400 flex justify-center my-2"
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
        d="M19 14l-7 7m0 0l-7-7m7 7V3"
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
