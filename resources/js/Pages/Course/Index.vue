<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'

const courses = ref([
  {
    name: 'Matemáticas',
    code: 'MAT101',
    description: 'Fundamentos matemáticos para ingeniería',
    credits: 4,
    teacher: 'Ing. Carlos Pérez',
    period: 'Primero',
    capacity: 30,
    status: 'Activo'
  },
  {
    name: 'Desarrollo de Software',
    code: 'DS201',
    description: 'Principios de programación y desarrollo',
    credits: 5,
    teacher: 'Ing. Ledin Alvarado',
    period: 'Segundo',
    capacity: 25,
    status: 'Activo'
  },
  {
    name: 'Sistemas Inteligentes para Negocios',
    code: 'SI301',
    description: 'Aplicación de base de datos en negocios',
    credits: 4,
    teacher: 'Ing. Abraham Sikaffy',
    period: 'Tercero',
    capacity: 20,
    status: 'Activo'
  },
  {
    name: 'Sistemas Automatizados',
    code: 'SA210',
    description: 'Automatización de procesos con sistemas electricos',
    credits: 4,
    teacher: 'Ing. Jonathan Moncada',
    period: 'Segundo',
    capacity: 25,
    status: 'Activo'
  },
  {
    name: 'Redes II',
    code: 'RED202',
    description: 'Configuración avanzada de redes',
    credits: 4,
    teacher: 'Ing. Mario Escobar',
    period: 'Tercero',
    capacity: 30,
    status: 'Activo'
  },
  {
    name: 'Doctrina Social de la Iglesia',
    code: 'DSI101',
    description: 'Principios sociales de la Iglesia',
    credits: 3,
    teacher: 'Lic. Juan Perez',
    period: 'Primero',
    capacity: 40,
    status: 'Activo'
  },
  {
    name: 'Salud y Nutrición',
    code: 'SN110',
    description: 'Hábitos saludables y nutrición',
    credits: 2,
    teacher: 'Dra. Ana Gómez',
    period: 'Primero',
    capacity: 35,
    status: 'Activo'
  },
  {
    name: 'Historia de Honduras',
    code: 'HH120',
    description: 'Historia política y social de Honduras',
    credits: 3,
    teacher: 'Lic. Pedro Flores',
    period: 'Segundo',
    capacity: 40,
    status: 'Activo'
  },
  {
    name: 'Ciencias de la Computación',
    code: 'CC150',
    description: 'Conceptos fundamentales de computación',
    credits: 4,
    teacher: 'Ing. Abraham Sikaffy',
    period: 'Primero',
    capacity: 30,
    status: 'Activo'
  },
  {
    name: 'Filosofía',
    code: 'FIL101',
    description: 'Introducción al pensamiento filosófico',
    credits: 3,
    teacher: 'Lic. Jorge Castillo',
    period: 'Segundo',
    capacity: 35,
    status: 'Inactivo'
  }
])
</script>

<template>
  <AuthenticatedLayout>
    <v-layout>

      <!-- SIDEBAR -->
      <v-navigation-drawer expand-on-hover permanent rail>
        <v-list>
          <v-list-item
            prepend-avatar="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT2m7u2eYSqsNWirV9_zqYWArYXhUTQH8mnw&s"
            :subtitle="$page.props.auth.user.email"
            :title="$page.props.auth.user.name"
          />
        </v-list>

        <v-divider />

        <v-list density="compact" nav>
        <Link :href="route('students.index')" class="text-decoration-none">
        <v-list-item prepend-icon="mdi-account" title="Estudiantes" value="students"></v-list-item>
        </Link>
        <Link :href="route('teachers.index')" class="text-decoration-none">
        <v-list-item prepend-icon="mdi-account" title="Docentes" value="teachers"></v-list-item>
        </Link>
        <Link :href="route('courses.index')" class="text-decoration-none">
        <v-list-item prepend-icon="mdi-book" title="Cursos" value="courses"></v-list-item>
        </Link>
        <Link :href="route('enrollments.index')" class="text-decoration-none">
        <v-list-item prepend-icon="mdi-pencil" title="Inscripciones" value="enrollments"></v-list-item>
        </Link>
        </v-list>
      </v-navigation-drawer>

      <!-- CONTENIDO -->
      <v-main>
        <v-container>

          <!-- BOTON CREAR -->
          <Link href="/courses/create">
            <v-btn color="primary" class="mb-4">
              CREAR CURSOS
            </v-btn>
          </Link>

          <!-- TABLA -->
          <v-table striped="even">
            <thead>
              <tr>
                <th class="text-left">NOMBRE</th>
                <th class="text-left">CODIGO</th>
                <th class="text-left">DESCRIPCION</th>
                <th class="text-left">CREDITOS</th>
                <th class="text-left">DOCENTE</th>
                <th class="text-left">PERIODO</th>
                <th class="text-left">CAPACIDAD</th>
                <th class="text-left">ESTADO</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="course in courses" :key="course.code">
                <td>{{ course.name }}</td>
                <td>{{ course.code }}</td>
                <td>{{ course.description }}</td>
                <td>{{ course.credits }}</td>
                <td>{{ course.teacher }}</td>
                <td>{{ course.period }}</td>
                <td>{{ course.capacity }}</td>
                <td>{{ course.status }}</td>
              </tr>
            </tbody>

          </v-table>

        </v-container>
      </v-main>

    </v-layout>
  </AuthenticatedLayout>
</template>