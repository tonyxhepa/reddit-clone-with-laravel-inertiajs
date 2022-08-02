<template>
  <guest-layout
    ><div class="flex justify-end m-2 p-2">
      <Link
        v-if="$page.props.auth.auth_check"
        :href="route('communities.posts.create', community.slug)"
        class="px-3 py-4 rounded bg-indig-500"
        >Create Post</Link
      >
    </div>
    <h1>Community {{ community.name }} show page</h1>
  </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/Guest.vue";
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
  community: Object(),
});
</script>
