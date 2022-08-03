<template>
  <guest-layout>
    <section class="flex md:flex-row m-2 p-2">
      <div class="w-8/12">
        <h1>{{ post.title }}</h1>
        Post Details
      </div>
      <div class="w-4/12 p-4">
        <div class="m-2 p-2 bg-slate-500 text-white">
          <h2>Latests Communities</h2>
        </div>
      </div>
    </section>
  </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/Guest.vue";
import { Link } from "@inertiajs/inertia-vue3";
import PostCard from "@/Components/PostCard.vue";
import Pagination from "@/Components/Pagination.vue";

defineProps({
  community: Object,
  post: Object,
});
</script>
