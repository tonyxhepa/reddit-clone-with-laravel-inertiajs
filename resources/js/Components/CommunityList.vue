<template>
  <div>
    <ul role="list" class="divide-y divide-slate-300 dark:divide-slate-700">
      <li
        v-for="community in communities"
        :key="community.id"
        class="py-3 sm:py-4"
      >
        <div class="flex items-center space-x-4">
          <Link
            :href="route('frontend.communities.show', community.slug)"
            class="
              text-slate-800
              dark:text-slate-400
              font-semibold
              truncate
              text-sm
            "
          >
            {{ community.name }}
          </Link>
          <div>Posts({{ community.posts_count }})</div>
        </div>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
  communities: Object,
});
</script>