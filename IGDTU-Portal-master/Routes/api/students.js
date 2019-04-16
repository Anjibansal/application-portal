const Student = require('../../db').Student
const route = require('express').Router()

route.get('/', (req, res) => {

    Student.findAll()
        .then((students) => {
            res.status(200).send(students)
        })
        .catch((err) => {
            res.status(500).send({
                error: "Could not retrive students"
            })
        })
})

route.post('/', (req, res) => {
    Student.create({
        name: req.body.name,
        email: req.body.email,
        phone: parseInt(req.body.phone),
        password: req.body.password
    }).then((student) => {
        res.status(201).send(student)
    }).catch((error) => {
        res.status(501).send({
            error: "Error adding student"
        })
    })
})

exports = module.exports = route