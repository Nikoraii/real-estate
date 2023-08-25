<template>
  <div class="flex flex-col min-h-screen">
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
      <div class="container mx-auto">
        <nav class="p-4 flex items-center justify-between">
          <div class="text-lg font-medium">
            <Link :href="route('listing.index')" class="duration-300 hover:underline decoration-indigo-600 dark:decoration-indigo-500 decoration-2">Listings</Link>
          </div>
          <div class="text-xl text-indigo-600 dark:text-indigo-500 font-bold text-center">
            <Link href="/">RealEstate</Link>
          </div>
          <div class="flex gap-2">
            <div v-if="user" class="flex items-center gap-4">
              <Link :href="route('notification.index')" class="text-gray-500 relative pr-2 py-2">
                <i class="bx bxs-bell bx-sm bx-tada-hover" />
                <div v-if="notificationCount" class="absolute right-0 top-0 w-5 h-5 bg-red-700 dark:bg-red-400 text-white font-medium border border-white dark:border-gray-900 rounded-full text-xs text-center">
                  {{ notificationCount }}
                </div>
              </Link>
              <Link class="text-sm text-gray-500 hover:text-gray-300" :href="route('realtor.listing.index')">{{ user.name }}</Link>
              <Link :href="route('realtor.listing.create')" class="btn-primary">+ New Listing</Link>
              <div>
                <Link :href="route('logout')" method="delete" as="button">Logout</Link>
              </div>
            </div>
            <div v-else class="flex items-center gap-2">
              <Link :href="route('user-account.create')">Register</Link>
              <Link :href="route('login')">Sign-In</Link>
            </div>
            <div class="flex items-center ml-6 mt-1">
              <button v-if="isDark" @click="toggleDark()"><i class="bx bxs-moon bx-sm bx-tada-hover text-indigo-600" type="solid" /></button>
              <button v-else @click="toggleDark()"><i class="bx bxs-sun bx-sm bx-tada-hover text-indigo-600" /></button>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <main class="container mx-auto p-4 w-full mb-auto">
      <div v-if="flash.success" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
        {{ flash.success }}
      </div>

      <slot>Default</slot>
    </main>

    <footer class="w-full">
      <div class="w-full px-8 text-center text-gray-500">
        <hr class="border-gray-500" />
        <div class="my-2">Made with &#10084; by <a class="text-indigo-600 dark:text-indigo-500 hover:underline" href="https://github.com/Nikoraii/real-estate" target="_blank">Nikoraii</a></div>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { computed } from 'vue'
import { Link } from '@inertiajs/vue3'
import { useToggle, useDark } from '@vueuse/core'

const props = defineProps({
  user: {
    type: Object,
  },
  flash: {
    type: Object,
  },
})

const isDark = useDark()
const toggleDark = useToggle(isDark)

const notificationCount = computed(
  () => Math.min(props.user.notificationCount, 9),
)
</script>