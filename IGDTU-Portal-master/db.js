const Sequelize = require("sequelize");

const db = new Sequelize("studentdb", "student", "studentpass", {
  host: "localhost",
  dialect: "mysql",
  pool: {
    min: 0,
    max: 5
  }
});

const Student = db.define("students", {
  id: {
    type: Sequelize.INTEGER,
    autoIncrement: true,
    primaryKey: true
  },
  name: {
    type: Sequelize.STRING,
    allowNull: false
  },
  email: {
    type: Sequelize.STRING,
    allowNull: false
  },
  phone: {
    type: Sequelize.INTEGER,
    allowNull: false
  },
  password: {
    type: Sequelize.STRING,
    allowNull: false
  }
});

db.sync()
    .then(() => console.log("Database has been synced"))
    .catch((err) => console.error("Error creating database"))

exports = module.exports = {
    Student
}
