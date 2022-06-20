const mongoose = require('mongoose')

const dbConnect = (app) => {
    mongoose
.connect(
    'mongodb+srv://jalastuey:vnmnoklm@desarrollo.irkohq2.mongodb.net/Stock_App?retryWrites=true&w=majority')
    .then((result) => {
    const PORT = process.env.PORT
    app.listen(PORT, () => {
    console.log(`Servidor escuchando en el puerto ${PORT}`)})
    console.log('Conexión Exitosa')})
    .catch((err) => console.log(err))
}

module.exports = dbConnect
