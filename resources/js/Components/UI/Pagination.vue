<template>
  <div v-if="links" class="flex gap-1">
    <Link
      v-for="(link, index) in links"
      :key="index" class="py-2 px-4 rounded-md"
      :href="link.url ?? ''"
      :class="{'bg-indigo-600 dark:bg-indigo-800 text-gray-300' : link.active}"
      v-html="link.label"
    />
  </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
defineProps({links: Array})
</script>