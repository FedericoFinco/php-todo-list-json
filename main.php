<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<div id="app">
    <div class="container">
        <h1>{{prova}}</h1>
        <template v-for="hotel in array">
            <div class="row">
                <h2 class="full">{{hotel.name}}</h2>
                <div class="box">{{hotel.description}}</div>
                <div class="box">{{hotel.parking}}</div>
                <div class="box">{{hotel.vote}}</div>
                <div class="box">{{hotel.distance_to_center}}</div>
            </div>
            </template>
        </div>
    </div>
    <script src="./main.js"></script>
        
</body>
</html>