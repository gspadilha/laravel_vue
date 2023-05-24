<template>
  <Link href="/"> Index Page</Link>&nbsp;
  <Link href="/show"> Show Page</Link>
  <div>Tempo de Página {{ timer }}</div>
  <hr />
  <slot></slot>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue';

const timer = ref(0);
setInterval(() => timer.value++, 1000)
</script>
