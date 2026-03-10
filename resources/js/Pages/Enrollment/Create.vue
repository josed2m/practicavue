<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { ref } from 'vue'

const enrollment = ref({
  enrollment_date: '',
  status: '',
  final_average: '',
  student_name: '',
  course_name: ''
})

const students = [
  'Juan López',
  'María Gómez',
  'Carlos Ramírez',
  'Ana Martínez',
  'Pedro Flores'
]

const courses = [
  'Matemáticas',
  'Desarrollo de Software',
  'Redes II',
  'Historia de Honduras',
  'Ciencias de la Computación'
]

const statusOptions = [
  'Activo',
  'Inactivo'
]
</script>

<template>
  <AuthenticatedLayout>
    <v-container>

      <h2 class="mb-4">Crear Inscripción</h2>

      <v-form>

        <v-text-field
          label="Fecha de Matrícula"
          type="date"
          v-model="enrollment.enrollment_date"
        />

        <v-select
          label="Estado"
          :items="statusOptions"
          v-model="enrollment.status"
        />

        <v-text-field
          label="Promedio Final"
          type="number"
          v-model="enrollment.final_average"
        />

        <v-select
          label="Estudiante"
          :items="students"
          v-model="enrollment.student_name"
        />

        <v-select
          label="Curso"
          :items="courses"
          v-model="enrollment.course_name"
        />

        <v-btn color="primary" class="mt-4">
          Guardar Inscripción
        </v-btn>

      </v-form>

    </v-container>
  </AuthenticatedLayout>
</template>