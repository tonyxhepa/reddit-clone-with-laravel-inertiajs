<template>
  <Head title="Create Community" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create Post for {{ community.name }}
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto bg-white m-2 p-6">
          <form @submit.prevent="submit">
            <div>
              <BreezeLabel for="title" value="Title" />
              <BreezeInput
                id="title"
                type="text"
                class="mt-1 block w-full"
                v-model="form.title"
                autofocus
                autocomplete="title"
              />
              <BreezeInputError :message="errors.title" />
            </div>

            <div class="mt-4">
              <BreezeLabel for="url" value="Url" />
              <BreezeInput
                id="url"
                type="url"
                class="mt-1 block w-full"
                v-model="form.url"
                autocomplete="url"
              />
              <BreezeInputError :message="errors.url" />
            </div>

            <div class="mt-4">
              <BreezeLabel for="description" value="Description" />
              <BreezeInput
                id="description"
                type="text"
                class="mt-1 block w-full"
                v-model="form.description"
                autocomplete="description"
              />
              <BreezeInputError :message="errors.description" />
            </div>

            <div class="flex items-center justify-end mt-4">
              <BreezeButton
                class="ml-4"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
              >
                Update
              </BreezeButton>
            </div>
          </form>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import BreezeButton from "@/Components/Button.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeInputError from "@/Components/InputError.vue";
import BreezeLabel from "@/Components/Label.vue";
import { Head, useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
  post: Object,
  community: Object,
  errors: Object,
});

const form = useForm({
  title: props.post?.title,
  description: props.post?.description,
  url: props.post?.url,
});

const submit = () => {
  form.put(
    route("communities.posts.update", [props.community.slug, props.post.slug])
  );
};
</script>

