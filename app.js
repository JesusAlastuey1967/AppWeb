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

app.use(express.static(path.join(__dirname,'public')))

const PORT = process.env.PORT || 4000

