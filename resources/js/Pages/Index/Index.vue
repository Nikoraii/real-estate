<template>
  <div class="container text-center justify-center items-center">
    <div class="flex mt-8">
      <div class="w-64 grow text-xl mt-8">
        <h1 class="mb-8 text-6xl font-extrabold leading-none tracking-tight text-indigo-600 dark:text-indigo-500">RealEstate</h1>
        <p>Welcome to RealEstate, where extraordinary living awaits. Immerse yourself in a world of unparalleled elegance, thoughtful design, and exceptional quality. Discover the perfect blend of luxury and comfort in our meticulously crafted residences, complemented by vibrant community spaces. Join us and experience a life of distinction at RealEstate.</p>
        <Link :href="route('listing.index')" class="mt-8 btn-primary mt-4 text-2xl transition-all duration-300 cursor-pointer filter hover:-translate-y-1" as="button">Browse Listings</Link>
      </div>
      <div class="grow">
        <img class="h-auto max-w-full ml-auto rounded-lg" src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  message: String,
})
</script>