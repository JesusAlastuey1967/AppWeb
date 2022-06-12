const { default: axios } = require('axios')
const express = require('express')
const mongoose = require('mongoose')
const path = require('path')
require('dotenv').config()

const app = express()

mongoose
.connect(
    'mongodb+srv://jalastuey:vnmnoklm@desarrollo.irkohq2.mongodb.net/Stock_App?retryWrites=true&w=majority'
)
.then((result) => { 
app.listen(PORT, () => {
console.log(`Servidor escuchando en el puerto ${PORT}`)
})
console.log('Conexión Exitosa')})
.catch((err) => console.log(err))
const productSchema = mongoose.Schema({
    name: {type:String, required:true},
    price: Number,
},
{timestamps:true}
)

const Product = mongoose.model('Product', productSchema)
app.use(express.json())
app.post('/api/v1/products', (req, res, next) => {
    const newProduct = new Product({
        name: req.body.name,
        price: req.body.price,
    })
    newProduct.save()
    .then((result) => {
        res.status(201).json({Ok: true})
    })
    .catch((err) => console.log(err))
})

app.get('/',(req, res, next) =>{
    const pokeApiBaseUrl ='https://pokeapi.co/api/v2/pokemon'
    axios(`${pokeApiBaseUrl}/charmander`)
    .then((axiosResponse) => {
    const pokemon = axiosResponse.data
    console.log({pokemon})
const html =`
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Productos</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
</head>
<body>
<h1>Nuestra tremenda App de Productos</h1>
<div class="form-container">
    <input type="text" id="productName" placeholder="Nombre del Producto">
    <input type="number" id="productPrice" placeholder="Precio del Producto">
    <button>Crear Producto</button>
    <h2>Listado de Productos</h2>
</div> 
<div class='poke-card'> 
    <h3>${pokemon.name}</h3>
    <img src=${pokemon.sprites.front_default} alt="Esta es una imagen del pokemon:${pokemon.name}">
    <span>${pokemon.id}</span> 
</div>
</body>
`
res.send(html)
})

// .then((pokemon) => {
//     console.log({pokemon})
//     const html = `
//     <h3>${pokemon.name}</h3>
//     <img src=${pokemon.sprites.front_default} alt="Esta es una imagen del pokemon:${pokemon.name}">
//     <span>${pokemon.id}</span>    
//     `
//     const div = document.createElement('div')
//     div.classList.add('poke-card')
//     div.innerHTML = html

//     document.querySelector('body').appendChild(div)
// })
// .catch()

})

app.use(express.static(path.join(__dirname,'public')))

const PORT = process.env.PORT || 4000
