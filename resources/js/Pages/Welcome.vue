<template>
  <guest-layout>
    <section class="flex md:flex-row m-2 p-2">
      <div class="w-8/12">
        <PostCard
          v-for="post in posts.data"
          :post="post"
          :community="post.community_slug"
          :key="post.id"
        />
      </div>
      <div class="w-4/12 p-4">
        <div class="m-2 p-2">
          <h2>Top Communities</h2>
          <CommunityList :communities="communities.data" />
        </div>
      </div>
    </section>
  </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/Guest.vue";
import PostCard from "@/Components/PostCard.vue";
import Pagination from "@/Components/Pagination.vue";
import CommunityList from "@/Components/CommunityList.vue";

defineProps({
  communities: Object,
  posts: Object,
});
</script>
