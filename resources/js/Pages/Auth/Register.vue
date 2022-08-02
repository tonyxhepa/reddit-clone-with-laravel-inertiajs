<script setup>
import BreezeButton from "@/Components/Button.vue";
import BreezeGuestLayout from "@/Layouts/Guest.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeInputError from "@/Components/InputError.vue";
import BreezeLabel from "@/Components/Label.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
defineProps({
  errors: Object,
});
const form = useForm({
  name: "",
  username: "",
  email: "",
  password: "",
  password_confirmation: "",
  terms: false,
});

const submit = () => {
  form.post(route("register"), {
    onFinish: () => form.reset("password", "password_confirmation"),
  });
};
</script>

<template>
  <BreezeGuestLayout>
    <Head title="Register" />

    <form
      @submit.prevent="submit"
      class="max-w-md mx-auto bg-white shadow rounded-md p-6"
    >
      <div>
        <BreezeLabel for="name" value="Name" />
        <BreezeInput
          id="name"
          type="text"
          class="mt-1 block w-full"
          v-model="form.name"
          autofocus
          autocomplete="name"
        />
        <BreezeInputError :message="errors.name" />
      </div>
      <div class="mt-4">
        <BreezeLabel for="username" value="Username" />
        <BreezeInput
          id="username"
          type="text"
          class="mt-1 block w-full"
          v-model="form.username"
          autocomplete="username"
        />
        <BreezeInputError :message="errors.username" />
      </div>
      <div class="mt-4">
        <BreezeLabel for="email" value="Email" />
        <BreezeInput
          id="email"
          type="email"
          class="mt-1 block w-full"
          v-model="form.email"
          autocomplete="email"
        />
        <BreezeInputError :message="errors.email" />
      </div>

      <div class="mt-4">
        <BreezeLabel for="password" value="Password" />
        <BreezeInput
          id="password"
          type="password"
          class="mt-1 block w-full"
          v-model="form.password"
          autocomplete="new-password"
        />
        <BreezeInputError :message="errors.password" />
      </div>

      <div class="mt-4">
        <BreezeLabel for="password_confirmation" value="Confirm Password" />
        <BreezeInput
          id="password_confirmation"
          type="password"
          class="mt-1 block w-full"
          v-model="form.password_confirmation"
          autocomplete="new-password"
        />
      </div>

      <div class="flex items-center justify-end mt-4">
        <Link
          :href="route('login')"
          class="underline text-sm text-gray-600 hover:text-gray-900"
        >
          Already registered?
        </Link>

        <BreezeButton
          class="ml-4"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Register
        </BreezeButton>
      </div>
    </form>
  </BreezeGuestLayout>
</template>
