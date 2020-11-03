<template>
    <div class="card" style="width: 18rem;">
        <img v-bind:src="this.place.img_source" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{place.title}}</h5>
            <p class="card-text">{{place.description}}</p>
            <p class="card-text">Puntuación: {{place.score}}</p>
            <a class="btn btn-warning" v-on:click="addScore()"><i class="far fa-thumbs-up"></i></a>
        </div>
    </div>
</template>

<script>
export default {
    name: "card",
    data(){
        return{
            rated: false,
        }
    },
    methods: {
        addScore(){
            if(!this.rated){
                this.place.score++;
            }
            this.rated = true;
        }
    },
    props: {
        place:{
            type: [Object],
            required: true, 
            default: {
                score: 5,
                title: "Lago",
                description: "Lago de Attilan",
                img_source: 'https://blogapi.uber.com/wp-content/uploads/2019/03/6-ideas-para-que-sepas-qu%C3%A9-hacer-en-Panajachel-en-tu-pr%C3%B3xima-visita.png'
            }
        }
    }
}
</script>

<style scoped>
    .card{
        display: inline-block;
        margin: 15px;
    }
    .btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    
    }
    img{
        max-width: 100%;
    }
    
</style>