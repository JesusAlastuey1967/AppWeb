const express = require('express')

const app = express()

app.get('/', (req, res) => {
console.log('Petición recibida')

res.send('Hola mundo con NODEMONSABCD¡')
})

app.listen(4000, () => {
    console.log('Servidor escuchando en el puerto 4000')
})
