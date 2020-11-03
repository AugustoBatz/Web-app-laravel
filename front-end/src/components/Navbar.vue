<template>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'navbar'
}
</script>

<style  scoped>
    nav{
        background-color: #33495d;
        width: 100%;

    }
    ul {
        list-style-type: none;
        margin: 0;
        margin-left: 20px;
        text-align: left;
        padding: 0;
        
    }
    li{
        display: inline;
        padding: 5px;
        
        }
    a{
        text-decoration: none;
        color: white;
    }
    a:hover{
        text-decoration: none;
        color: gold;
    }
</style>