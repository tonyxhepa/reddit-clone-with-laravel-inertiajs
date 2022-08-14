<template>
  <guest-layout>
    <template #header>
      <div class="flex justify-between m-2 p-2">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          r/{{ community.name }}
        </h2>
        <Link
          v-if="$page.props.auth.auth_check"
          :href="route('communities.posts.create', community.slug)"
          class="px-3 py-2 rounded bg-indigo-500 hover:bg-indigo-300 text-white"
          >Create Post</Link
        >
      </div>
    </template>

    <section class="flex md:flex-row m-2 p-2">
      <div class="w-8/12">
        <PostCard
          v-for="post in posts.data"
          :post="post"
          :community="community.slug"
          :key="post.id"
        />
        <div class="mt-4 p-2">
          <Pagination :links="posts.meta.links" />
        </div>
      </div>
      <div class="w-4/12 p-4">
        <div>
          <h2
            class="
              font-semibold
              text-lg
              p-6
              bg-indigo-700
              rounded-t-lg
              text-white
            "
          >
            About {{ community.name }}
          </h2>
          <p class="bg-white p-4 rounded-b-lg">{{ community.description }}</p>
        </div>
        <CommunityList class="mt-4" :communities="communities.data">
          <template #title>Latest Communities</template>
        </CommunityList>
      </div>
    </section>
  </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/Guest.vue";
import { Link } from "@inertiajs/inertia-vue3";
import PostCard from "@/Components/PostCard.vue";
import Pagination from "@/Components/Pagination.vue";
import CommunityList from "@/Components/CommunityList.vue";

defineProps({
  community: Object,
  posts: Object,
  communities: Object,
});
</script>
