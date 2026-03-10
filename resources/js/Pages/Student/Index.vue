<script setup>
import { ref } from 'vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Link } from '@inertiajs/vue3'

const desserts = ref([
  { name: 'Frozen Yogurt', calories: 159 },
  { name: 'Ice cream sandwich', calories: 237 },
  { name: 'Eclair', calories: 262 },
  { name: 'Cupcake', calories: 305 },
  { name: 'Gingerbread', calories: 356 },
  { name: 'Jelly bean', calories: 375 },
  { name: 'Lollipop', calories: 392 },
  { name: 'Honeycomb', calories: 408 },
  { name: 'Donut', calories: 452 },
  { name: 'KitKat', calories: 518 },
])

const headers = [
  { title: 'Dessert (100g serving)', key: 'name' },
  { title: 'Calories', key: 'calories' },
]
</script>

<template>
    <v-layout>

      <!-- 🔹 MENU LATERAL (NO TOCADO) -->
      <v-navigation-drawer
        expand-on-hover
        permanent
        rail
      >
        <v-list>
          <v-list-item
            prepend-avatar="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT2m7u2eYSqsNWirV9_zqYWArYXhUTQH8mnw&s"
            :subtitle="$page.props.auth.user.email"
            v-bind:title="$page.props.auth.user.name"
          ></v-list-item>
        </v-list>

        <v-divider></v-divider>
        <v-list density="compact" nav>
        <Link :href="route('students.index')" class="text-decoration-none">
        <v-list-item prepend-icon="mdi-account" title="Estudiantes" value="students"></v-list-item>
        </Link>  
      <v-list-item prepend-icon="mdi-account-tie" title="Catedratico" value="Docentes"></v-list-item>     
    <v-list-item prepend-icon="mdi-book" title="Cursos" value="Cursos"></v-list-item>
        </v-list>
      </v-navigation-drawer>

      <!-- 🔹 CONTENIDO PRINCIPAL -->
      <v-main class="pa-6">
        <v-card>
          <v-card-title class="text-h6">
            Tabla de Postres
          </v-card-title>

          <v-data-table
            :headers="headers"
            :items="desserts"
            item-key="name"
            density="comfortable"
          ></v-data-table>
        </v-card>
      </v-main>

    </v-layout>
</template>

<style scoped>
</style>