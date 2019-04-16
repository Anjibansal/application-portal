const route = require('express').Router()

route.use('/students', require('./students'))

exports = module.exports = {
    route
}