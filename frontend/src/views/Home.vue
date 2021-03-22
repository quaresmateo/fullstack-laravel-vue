<template>
  <div class="home">
    <b-container>
      <b-card bg-variant="light" class="text-center">
        <b-card-text class="p-3">
          <b-row align-v="center">
            Filtro <span class="p-1"></span>
            <b-form-select
              style="width: 200px"
              v-model="selected"
              size="sm"
              :options="types"
            >
            </b-form-select>
          </b-row>
          <b-row> Ola 2</b-row>
        </b-card-text>
      </b-card>
    </b-container>
  </div>
</template>

<script>
import { api } from '@/services/index.js'
export default {
  name: 'Home',
  components: {},
  data() {
    return {
      selected: null,
      types: null
    }
  },

  created() {
    this.getTypes()
  },

  methods: {
    getTypes() {
      api
        .get('/types')
        .then((response) => {
          const typesList = response.data.data

          this.types = typesList.map((type) => ({
            value: type.id,
            text: type.name
          }))

          this.types.unshift({ value: null, text: 'Selecione' })
        })
        .catch((error) => console.log(`error `, error))
    }
  }
}
</script>

<style scoped></style>
