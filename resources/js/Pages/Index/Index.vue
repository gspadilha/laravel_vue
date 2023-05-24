<template>
  <div>Index Vue</div>
  <Link href="/show"> Show Page</Link>

  <div>Estou recebendo {{ mensagem }}</div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'

interface IndexProps {
  mensagem?: string;
}

defineProps<IndexProps>();
</script>
