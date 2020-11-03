<template>
  <div class="formPlace">
    <h3>Ingreso de lugares</h3>
    <div>
      <h2>Titulo</h2>
      <input type="text" v-model="title" />
    </div>

    <div>
      <h2>Descripcion</h2>
      <input type="text" v-model="description" />
    </div>
    <div>
      <h2>Ruta Imagen</h2>
      <input type="text" v-model="img_source" />
    </div>
    <div>
      <h2>Postear</h2>
      <input type="submit" value="Submit" v-on:click="submit" />
    </div>
  </div>
</template>

<script>
export default {
  name: "formPlace",
  data: () => ({
    img_source: "",
    description: "",
    title: "",
  }),
  methods: {
    submit: function () {
      var place = {
        img_source: this.img_source,
        title: this.title,
        description: this.description,
        score: 0,
      };
      (async () => {
      const rawResponse = await fetch("http://127.0.0.1:8000/api/places", {
        method: "POST",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
        body: JSON.stringify(place),
      });
      const content = await rawResponse.json();
      console.log(content.data)
      })();
    },
  },
};
</script>

<style scoped>
.formPlace {
}
</style>